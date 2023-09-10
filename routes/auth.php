<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
            ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('login-for-noleggio', [AuthenticatedSessionController::class, 'createAndNoleggia'])
            ->name('login-for-noleggio');

    Route::post('login-for-noleggio', [AuthenticatedSessionController::class, 'storeAndNoleggia']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
});
