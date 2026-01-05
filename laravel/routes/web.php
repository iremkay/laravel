<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Müşteri route'ları
Route::resource('customers', CustomerController::class);

// Yemek route'ları
Route::resource('meals', MealController::class);

// Yiyecek route'ları
Route::resource('foods', FoodController::class);

// Test sayfası
Route::get('/test', function () {
    return '<h1>Merhaba! Laravel Çalışıyor! 🎉</h1>';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
