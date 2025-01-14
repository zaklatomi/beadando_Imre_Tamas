<?php

namespace App\Http\Controllers;

use App\Models\Change;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    public function index()
    {
        return Change::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'etterem' => 'required|exists:restaurants,id',
            'datumig' => 'required|date',
            'regi_elerheto_e' => 'required|boolean',
        ]);

        return Change::create($validated);
    }
}
