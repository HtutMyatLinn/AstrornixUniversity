<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// admin
Route::get('/admin', [HomeController::class, 'administrator']);

// marketing manager
Route::get('/marketing-manager', [HomeController::class, 'marketingManager'])->middleware(['auth', 'marketing-manager']);

// marketing coordinator
Route::get('/marketing-coordinator', [HomeController::class, 'marketingCoordinator'])->middleware(['auth', 'marketing-coordinator']);


Route::get('/', function () {
    return view('home');
});

Route::get('/contributions', function () {
    return view('contributions.index');
})->name('contributions');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
