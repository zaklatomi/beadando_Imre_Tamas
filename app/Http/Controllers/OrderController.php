<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user' => 'required|exists:users,id',
            'etterem' => 'required|exists:restaurants,id',
            'datum' => 'required|date',
            'statusz' => 'required|string',
            'vegosszeg' => 'required|numeric',
        ]);

        return Order::create($validated);
    }
}
