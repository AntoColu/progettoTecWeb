<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

// Mostra tutte le auto a catalogo
Route::get("/catalogo", [PublicController::class, 'showCatalogo'])
    ->name('catalogo');

// Mostra le auto di una certa categoria e dentro una fascia di prezzo
Route::get("/catalogo-filtrato", [PublicController::class, 'showCatalogoFiltrato'])
    ->name('catalogo-filtrato');

Route::get("/dettagli-auto/{targa}", [PublicController::class, 'showDettagliAuto'])
    ->name('dettagli-auto');



/**
 *  Sezione USER livello 2
**/
Route::prefix('user')->group(function () {
    Route::get("/account", [UserController::class, 'showAccount'])->middleware("can:isUser")
        ->name('user-account');

    Route::get("/account/modifica-dati", [UserController::class, 'showModificaDati'])->middleware("can:isUser")
        ->name('modifica-dati');

    Route::post("/account/modifica-dati", [UserController::class, 'modificaDati'])->middleware("can:isUser")
        ->name('modifica-dati.store');

    Route::get("/dettagli-auto/noleggio", [UserController::class, 'noleggiaAuto'])->middleware("can:isUser")
        ->name('noleggio');

    Route::get("/riepilogo-noleggi", [UserController::class, 'showRiepilogo'])->middleware("can:isUser")
        ->name('riepilogo-noleggi');
});


/**
 *  Sezione STAFF livello 3
**/
Route::prefix('gestione-auto')->group(function () {
    Route::get("/", [StaffController::class, 'showGestioneAuto'])->middleware("can:isStaff")
        ->name('gestione-auto');

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

Route::post("/storico-filtrato", [StaffController::class, 'storicoAutoMese'])->middleware("can:isStaff")
        ->name('storico-mese');



/**
 *  Sezione ADMIN livello 4
**/

// Rotte dedicate alla gestione dello staff
Route::prefix('gestione-staff')->group(function () {
    Route::get("/", [AdminController::class, 'showGestioneStaff'])->middleware("can:isAdmin")
        ->name('gestione-staff');

    Route::get("/inserisci", [AdminController::class, 'showInserisciStaff'])->middleware("can:isAdmin")
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
Route::prefix('gestione-clienti')->group(function () {
    Route::get("/", [AdminController::class, 'showGestioneClienti'])->middleware('can:isAdmin')
        ->name('gestione-clienti');

    Route::get("/elimina-clienti/{username}", [AdminController::class, 'eliminaClienti'])->middleware('can:isAdmin')
        ->name('elimina-clienti');
});


// Rotte per la gestione delle faq
Route::prefix('gestione-faq')->group(function () {
    Route::get("/", [AdminController::class, 'showGestioneFaq'])->middleware('can:isAdmin')
        ->name('gestione-faq');

    Route::get("/inserisci", [AdminController::class, 'showInserisciFaq'])->middleware("can:isAdmin")
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