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
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
    
    Route::get('cambia-password', [ChangePasswordController::class, 'create'])
        ->name('cambia-password');

    Route::post('cambia-password', [ChangePasswordController::class, 'store']);

    Route::get('/modifica-info', [ModificainfoController::class, 'create'])->name('modifica-info');

    Route::post('/modifica-info', [ModificainfoController::class, 'store']);
        
});
