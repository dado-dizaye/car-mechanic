<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\ReviewController;

Route::middleware(['auth'])->group(function () {
    Route::resource('cars', CarController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('appointments', AppointmentController::class);
    Route::resource('mechanics', MechanicController::class);
    Route::resource('reviews', ReviewController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    // Admin specific routes
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});
