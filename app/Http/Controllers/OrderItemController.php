<?php

namespace App\Http\Controllers;

use App\Models\Order_Item;
use Database\Factories\OrderItemFactory;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        return Order_Item::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rendeles' => 'required|exists:orders,id',
            'etel' => 'required|exists:foods,id',
            'adag' => 'required|numeric',
            'ar' => 'required|numeric',
        ]);

        return Order_Item::create($validated);
    }
}
