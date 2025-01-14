<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        return Food::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nev' => 'required|string',
            'etterem' => 'required|exists:restaurants,id',
            'ar' => 'required|numeric',
            'tipus' => 'required|exists:types,id',
            'osszetevok' => 'nullable|string',
            'elerheto_e' => 'required|boolean',
        ]);

        return Food::create($validated);
    }
}
