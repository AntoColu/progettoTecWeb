<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller {

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('auth/login');
    }


    /**
     *  Funzione che manda alla pagina di login, ma fornisce la targa
     *  perchè una volta effettuato il login l'utente verrà reindirizzato alla pagina di noleggio
    **/
    public function createAndNoleggia(Request $request) {
        return view('auth/login')->with('targa', $request->targa);;
    }


    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request) {

        $request->authenticate();

        $request->session()->regenerate();

        
        // Redirect in base al ruolo
        $ruolo = auth()->user()->ruolo;
        switch ($ruolo) {
            case 'admin': return redirect()->route('home');

            case 'staff': return redirect()->route('staff');

            case 'user': return redirect()->route('home');

            default: return redirect('/');
        }
    }


    /**
     *  Funzione che viene richiamata quando si viene indirizzati sulla pagina di login,
     *  premendo sul pulsante di noleggio auto.
     *  Dopo aver effettuato il login l'utente loggato verrà reindirizzato alla pagina di noleggio.
    **/
    public function storeAndNoleggia(LoginRequest $request) {

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('dettagli-auto', ['targa' => $request->targa]);
    }


    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }

}
