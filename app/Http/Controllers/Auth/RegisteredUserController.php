<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller {

    /**
     * Chiama la vista
     *
     *
     */
    public function create() {
        return view('auth/registrazione');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request) {

        // Regole dei parametri
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'residenza' => ['required', 'string', 'max:255'],
            'nascita' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255'], // Verifica che venga rispettato il formato email
            'occupazione' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:utente'], // Username deve essere univoco
            'password' => ['required', 'max:255', Rules\Password::defaults()],
            'ruolo' => ['required', 'string', 'max:6']
        ]);

        $user = User::create([
                    'nome' => $request->nome,
                    'cognome' => $request->cognome,
                    'residenza' => $request->residenza,
                    'nascita' => $request->nascita,
                    'email' => $request->email,
                    'occupazione' => $request->occupazione,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'ruolo' => $request->ruolo
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

}
