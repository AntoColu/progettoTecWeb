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


    /**
     *  Ritorno la pagina riguardante la modifica di un membro dello staff, 
     *  dato lo username
    **/
    public function showModificaStaff($username){
        $staff = User::find($username);

        return view('staff/modifica-staff')->with(['staff' => $staff]);
    }


    /**
     *  Funzione che va a modificare il membro dello staff selezionato
    **/
    public function modificaStaff(Request $request){

    }
}
