<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('availability_changes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('etterem')->constrained('restaurants')->onDelete('cascade');
        $table->date('datumig');
        $table->boolean('regi_elerheto_e')->default(false);
        $table->timestamps();
        $table->unique(['etterem', 'datumig']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('changes');
    }
};
