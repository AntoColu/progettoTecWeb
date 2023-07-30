<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 *  Sezione pubblica del sito
**/ 
Route::get('/', [PublicController::class, 'showHome'])
    ->name('home');

Route::get('/home', [PublicController::class, 'showHome'])
    ->name('home');

Route::get("/faq", [PublicController::class, 'showFAQ'])
    ->name("faq");

Route::get("/contatti", [PublicController::class, 'showContatti'])
    ->name('contatti');