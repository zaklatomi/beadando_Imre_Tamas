<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'felhasznalonev' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'jelszo' => 'required|string',
            'telefonszam' => 'nullable|string',
            'role' => 'required|in:manager,admin,user',
        ]);

        return User::create($validated);
    }
}
