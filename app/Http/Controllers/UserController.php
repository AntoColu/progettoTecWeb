<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     *  Ritorno la pagina riguardante l'account dell'utente
    **/
    public function showAccount(){
        $user = Auth::user();
        return view('user/gestione-account')->with(['user' => $user]);
    }


    /**
     *  Ritorno la pagina riguardante la modifica dei dati dell'account
    **/
    public function showModificaDati(){
        $user = Auth::user();
        return view('user/modifica-dati')->with(['user' => $user]);
    }


    /**
     *  Funzione che permette la modifica dei dati dell'utente registrato
    **/
    public function modificaDati(Request $request){
        $user = User::find(auth()->user()->getAuthIdentifier()); // Con questa istruzione non ho errori con la save()

        // Controllo se il nuovo username modificato esiste già:
        // in caso affermativo l'utente viene reindirizzato di nuovo alla pagina di modifica
        // con un messaggio d'errore
        if(User::find($request->username)){
            return redirect()->route('modifica-dati')->withErrors(['errore-modifica-dati' => 'Username già utilizzato da un altro utente']);
        }
        // se il nuovo username non è ancora stato usato, allora effettuo la modifica dei dati
        else{
            if($request->nome != null){
                $user->nome = $request->nome;
            }
            if($request->cognome != null){
                $user->cognome = $request->cognome;
            }
            if($request->residenza != null){
                $user->residenza = $request->residenza;
            }
            if($request->nascita != null){
                $user->nascita = $request->nascita;
            }
            if($request->email != null){
                $user->email = $request->email;
            }
            if($request->occupazione != null){
                $user->occupazione = $request->occupazione;
            }
            if($request->username != null){
                $user->username = $request->username;
            }
            if($request->password != null){
                $user->password = Hash::make($request->password);
            }
            
            $user->save();

            return redirect()->route('user-account')->with('success', 'Dati aggiornati con successo');
        }
    }


    /**
     *  Funzione che permette il noleggio dell'auto
    **/
    public function noleggiaAuto(Request $request){
        $user = Auth::user();
        $auto = Auto::find($request->targa);

        // Se il campo username di auto è vuoto allora noleggio l'auto
        if($auto->username == ''){
            $auto->username = $user->username;
            $auto->data_inizio = $request->data_inizio;
            $auto->data_fine = $request->data_fine;
            $auto->save();

            // Reindirizzo l'utente alla pagina dei dettagli dell'auto scelta con un messaggio di successo
            return redirect()->route('dettagli-auto')->with('success', 'Auto noleggiata con successo');
        }
        // altrimenti l'auto è stata già noleggiata da qualcun altro
        else{
            // Reindirizzo l'utente alla pagina dei dettagli dell'auto scelta con un errore
            return redirect()->route('dettagli-auto')->withErrors(['auto-occupata' => 'Auto già noleggiata da un altro utente']);
        }
    }


    /**
     *  Ritorna la pagina che mostra il riepilogo dei noleggi
    **/
    public function showRiepilogo(){
        $user = Auth::user();
        $automobili = Auto::where('user', $user->username)->get();
        return view('user/riepilogo-noleggi')->with('automobili', $automobili);
    }
}
