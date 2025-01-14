<?php

use App\Http\Controllers\ChangeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Összes felhasználó lekérdezése
Route::get('/users', [UserController::class, 'index']);

// Új felhasználó létrehozása
Route::post('/users', [UserController::class, 'store']);

// Összes étterem lekérdezése
Route::get('/restaurants', [RestaurantController::class, 'index']);

// Új étterem létrehozása
Route::post('/restaurants', [RestaurantController::class, 'store']);

// Összes étel lekérdezése
Route::get('/foods', [FoodController::class, 'index']);

// Új étel létrehozása
Route::post('/foods', [FoodController::class, 'store']);

// Összes típus lekérdezése
Route::get('/types', [TypeController::class, 'index']);

// Új típus létrehozása
Route::post('/types', [TypeController::class, 'store']);

// Összes rendelés lekérdezése
Route::get('/orders', [OrderController::class, 'index']);

// Új rendelés létrehozása
Route::post('/orders', [OrderController::class, 'store']);

// Összes rendelés tétel lekérdezése
Route::get('/order-items', [OrderItemController::class, 'index']);

// Új rendelés tétel létrehozása
Route::post('/order-items', [OrderItemController::class, 'store']);

// Összes változás lekérdezése
Route::get('/changes', [ChangeController::class, 'index']);

// Új változás létrehozása
Route::post('/changes', [ChangeController::class, 'store']);