<?php

use App\Models\Admin;
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
 *  Sezione PUBBLICA livello 1
**/ 
Route::get('/', [PublicController::class, 'showHome'])
    ->name('home');

Route::get('/home', [PublicController::class, 'showHome'])
    ->name('home');

Route::get("/contatti", [PublicController::class, 'showContatti'])
    ->name('contatti');

Route::get("/catalogo", [PublicController::class, 'showCatalogo'])
    ->name('catalogo');

Route::get("/dettagli-auto/{targa}", [PublicController::class, 'showDettagliAuto'])
    ->name('dettagli-auto');



/**
 *  Sezione USER livello 2
**/
Route::get("/user-account", [UserController::class, 'showAccount'])->middleware("can:isUser")
    ->name('user-account');

Route::get("/dettagli-auto/noleggio/{targa}", [UserController::class, 'noleggiaAuto'])->middleware("can:isUser")
    ->name('noleggio');

Route::get("/riepilogo-noleggi", [UserController::class, 'showRiepilogo'])->middleware("can:isUser")
    ->name('riepilogo');



/**
 *  Sezione STAFF livello 3
**/
Route::prefix('gest-auto')->group(function () {
    Route::get("/", [StaffController::class, 'showGestioneAuto'])->middleware("can:isStaff")
        ->name('gest-auto');

    Route::get("/inserisci", [StaffController::class, 'showNuovaAuto'])->middleware("can:isStaff")
        ->name('inserisci-auto');

    Route::post("/inserisci", [StaffController::class, 'inserisciAuto'])->middleware("can:isStaff")
        ->name('inserisci-auto.store');

    Route::get("/modifica/{targa}", [StaffController::class, 'showModificaAuto'])->middleware("can:isStaff")
        ->name('modifica-auto');

    Route::post("/modifica", [StaffController::class, 'modificaAuto'])->middleware("can:isStaff")
        ->name('modifica-auto.store');

    Route::get("/elimina/{targa}", [StaffController::class, 'eliminaAuto'])->middleware("can:isStaff")
        ->name('elimina-auto');
});

Route::get("/storico-noleggi", [StaffController::class, 'showStorico'])->middleware("can:isStaff")
        ->name('storico-noleggi');



/**
 *  Sezione ADMIN livello 4
**/

// Rotte dedicate alla gestione dello staff
Route::prefix('gest-staff')->group(function () {
    Route::get("/", [AdminController::class, 'showGestioneStaff'])->middleware("can:isAdmin")
        ->name('gest-staff');

    Route::get("/inserisci", [AdminController::class, 'showNuovoStaff'])->middleware("can:isAdmin")
        ->name('inserisci-staff');

    Route::post("/inserisci", [AdminController::class, 'inserisciStaff'])->middleware("can:isAdmin")
        ->name('inserisci-staff.store');

    Route::get("/modifica/{username}", [AdminController::class, 'showModificaStaff'])->middleware("can:isAdmin")
        ->name('modifica-staff');

    Route::post("/modifica", [AdminController::class, 'modificaStaff'])->middleware("can:isAdmin")
        ->name('modifica-staff.store');

    Route::get("/elimina/{username}", [AdminController::class, 'eliminaStaff'])->middleware("can:isAdmin")
        ->name('elimina-staff');
});


// Rotte per l'eliminazione dei clienti
Route::prefix('gest-clienti')->group(function () {
    Route::get("/", [AdminController::class, 'showGestioneClienti'])->middleware('can:isAdmin')
        ->name('gest-clienti');

    Route::get("/elimina-clienti/{username}", [AdminController::class, 'eliminaClienti'])->middleware('can:isAdmin')
        ->name('elimina-clienti');
});


// Rotte per la gestione delle faq
Route::prefix('gest-faq')->group(function () {
    Route::get("/", [AdminController::class, 'showGestioneFaq'])->middleware('can:isAdmin')
        ->name('gest-faq');

    Route::get("/inserisci", [AdminController::class, 'showNuovaFaq'])->middleware("can:isAdmin")
        ->name("crea-faq");

    Route::post("/inserisci", [AdminController::class, 'inserisciFaq'])->middleware("can:isAdmin")
        ->name("crea-faq.store");

    Route::get("/modifica/{faqId}", [AdminController::class, 'showModificaFaq'])->middleware("can:isAdmin")
        ->name("modifica-faq");

    Route::post("/modifica/conferma", [AdminController::class, 'modificaFaq'])->middleware("can:isAdmin")
        ->name("modifica-faq.store");

    Route::get("/elim/{faqId}", [AdminController::class, 'eliminaFaq'])->middleware("can:isAdmin")
        ->name("elimina-faq");
});


// Rotte per la gestione delle statistiche
Route::get("/statistiche", [AdminController::class, 'showStatistiche'])->middleware('can:isAdmin')
    ->name('statistiche');

/**
 *  FINE sezione ADMIN
**/

    
require __DIR__.'/auth.php';