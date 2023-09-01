<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     *  Ritorno la pagina riguardante la gestione dello staff, passando la lista dei membri dello staff
    **/
    public function showGestioneStaff(){
        return view('staff/gestione-staff')->with('membri_staff', User::where('ruolo', 'staff')->get());
    }


    /**
     *  Ritorno la pagina riguardante l'inserimento di un nuovo membro dello staff
    **/
    public function showNuovoMembroStaff(){
        return view('staff/inserisci-staff');
    }


    /**
     *  Funzione che inserisce un nuovo membro dello staff
    **/
    public function inserisciStaff(){
    }
}
