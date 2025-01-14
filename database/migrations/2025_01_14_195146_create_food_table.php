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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('etterem')->constrained('restaurants');
            $table->decimal('ar', 8, 2);
            $table->foreignId('tipus')->constrained('types');
            $table->text('osszetevok')->nullable();
            $table->boolean('elerheto_e')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
