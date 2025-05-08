<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\HomeController;

/* Public Routes */
Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');

/* Auth Routes */
Auth::routes();

/* Protected Routes */
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});