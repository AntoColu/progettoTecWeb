<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Auto;

class StaffController extends Controller
{
    protected $listaAuto;
    protected $listaUtenti;

    // Auth::user() ritorna null se si trova nel costruttore del Controller
    // quindi si sposta il costruttore in un metodo custom da far runnare
    // carico nel costuttore la lista di tuple che devo manipolare
    public function setup(){
        $this->listaAuto = Auto::paginate(5);
        $this->listaUtenti = User::getUtenti();
    }

    /**
     *  Ritorno la pagina riguardante la gestione delle auto, passando la lista delle auto
    **/
    public function showGestioneAuto(){
        return view('staff/gestione-auto')->with('automobili', Auto::all());
    }

    /**
     *  Ritorno la pagina riguardante l'inserimento di una nuova auto
    **/
    public function showNuovaAuto(){
        return view('staff/inserisci-auto');
    }

    /**
     *  Funzione che va ad inserire la nuova auto
    **/
    public function inserisciAuto(Request $request){
        $array = $request->all();

        // Crea l'auto
        $nuova_auto = Auto::create([
            'marca' => $array['marca'],
            'modello' => $array['modello'],
            'targa' => $array['targa'],
            'anno' => $array['anno'],
            'nPosti' => $array['nPosti'],
            'motore' => $array['motore'],
            'carburante' => $array['carburante'],
            'allestimento' => $array['allestimento'],
            'descrizione' => $array['descrizione'],
            'prezzo' => $array['prezzo'],
            /*'img_principale' => $array[],
            'img_destra' => $array[],
            'img_sinistra' => $array[],
            'img_frontale' => $array[],
            'img_posteriore' => $array[]*/
        ]);

        if ($request->hasFile('immagine')) {
            $image = $request->file('immagine');
            $arrayImage = $this->imageCompose($image);
            $estensione = '.' . $arrayImage[1];

            //$fullImageName = $new_foto->id_foto.$estensione;

            //sposta l'immagine
            $destinationPath = public_path() . '/images_case';
            //$image->move($destinationPath, $fullImageName);
        }
    }

    public function showModificaAuto(){

    }

    public function modificaAuto(){

    }

    public function eliminaAuto(){

    }

    /**
     *  Ritorna la lista delle auto noleggiate un certo mese
    **/
    public function storicoAutoMese(Request $request){
        return json_encode(Auto::where('data_inizio', $request->dataInizio)->get());
    }
}
