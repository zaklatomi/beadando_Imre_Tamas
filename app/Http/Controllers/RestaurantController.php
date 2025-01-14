<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        return restaurant::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nev' => 'required|string|unique:restaurants',
            'manager_user' => 'required|exists:users,id',
            'cim' => 'required|string',
            'telefonszam' => 'required|string',
            'elerheto_e' => 'required|boolean',
        ]);

        return Restaurant::create($validated);
    }
}
