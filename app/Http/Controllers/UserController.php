<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     *  Funzione che permette il noleggio dell'auto
    **/
    public function noleggiaAuto($targa){

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
