<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        return Type::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tipusneve' => 'required|string|unique:types',
        ]);

        return Type::create($validated);
    }
}
