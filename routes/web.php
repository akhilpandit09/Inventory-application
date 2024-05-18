<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.page');
    Route::get('/create', [ProductController::class, 'create'])->name('create.page');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::get('delete/{id}/', [ProductController::class, 'destroy'])->name('products.destroy');
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
});

Route::prefix('analytics')->group(function () {
    Route::get('/', [AnalyticsController::class, 'index'])->name('analytics.index');
});

Route::prefix('teams')->group(function () {
    Route::get('/', [TeamController::class, 'index'])->name('team.index');
    Route::get('/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/store', [TeamController::class, 'store'])->name('team.store');
    Route::get('/show', [TeamController::class, 'show'])->name('team.show');
    Route::get('/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::get('delete/{id}/', [TeamController::class, 'destroy'])->name('team.destroy');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'showRegistrationForm')->name('register');
    Route::post('/register', 'register');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
});
