<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Auto;

class StaffController extends Controller
{
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
        Auto::create([
            'marca' => $array['marca'],
            'modello' => $array['modello'],
            'targa' => $array['targa'],
            'anno' => $array['anno'],
            'nPosti' => $array['nPosti'],
            'motore' => $array['motore'],
            'carburante' => $array['carburante'],
            'username' => $array['username'],
            'catId' => $array['catId'],
            'descrizione' => $array['descrizione'],
            'prezzo' => $array['prezzo'],
            'data_inizio' => $array['data_inizio'],
            'data_fine' => $array['data_fine']
        ]);

        // Elaboro il nome dell'immagine principale
        if($request->hasFile('img_principale')){
            $image = $request->file('img_principale');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Se la marca presenta degli spazi, allora li elimino
            $marcaAuto = explode(' ', $array['marca']);
            $nomeCompleto = $marcaAuto[0];
            for($i = 0; $i < count($marcaAuto); $i++){
                $nomeCompleto = $nomeCompleto . $marcaAuto[$i];
            }

            // Se il modello presenta degli spazi, allora li elimino
            $modelloAuto = explode(' ', $array['modello']);
            $nomeCompleto = $nomeCompleto . $modelloAuto[0];
            for($i = 0; $i < count($modelloAuto); $i++){
                $nomeCompleto = $nomeCompleto . $modelloAuto[$i];
            }

            // Ora al nome aggiungo '_principale' e l'estensione
            $nomeCompleto = $nomeCompleto . '_principale' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompleto);
        }

        // Elaboro il nome dell'immagine del lato destro
        if($request->hasFile('img_destra')){
            $image = $request->file('img_destra');
            $nomeImg = $image->getClientOriginalName();

            // Separo il nome dall'estensione
            $arrayImg = explode('.', $nomeImg);
            
            // Se la marca presenta degli spazi, allora li elimino
            $marcaAuto = explode(' ', $array['marca']);
            $nomeCompleto = $marcaAuto[0];
            for($i = 0; $i < count($marcaAuto); $i++){
                $nomeCompleto = $nomeCompleto . $marcaAuto[$i];
            }

            // Se il modello presenta degli spazi, allora li elimino
            $modelloAuto = explode(' ', $array['modello']);
            $nomeCompleto = $nomeCompleto . $modelloAuto[0];
            for($i = 0; $i < count($modelloAuto); $i++){
                $nomeCompleto = $nomeCompleto . $modelloAuto[$i];
            }

            // Ora al nome aggiungo '_destra' e l'estensione
            $nomeCompleto = $nomeCompleto . '_destra' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompleto);
        }

        // Elaboro il nome dell'immagine del lato sinistro
        if($request->hasFile('img_sinistra')){
            $image = $request->file('img_sinistra');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Se la marca presenta degli spazi, allora li elimino
            $marcaAuto = explode(' ', $array['marca']);
            $nomeCompleto = $marcaAuto[0];
            for($i = 0; $i < count($marcaAuto); $i++){
                $nomeCompleto = $nomeCompleto . $marcaAuto[$i];
            }

            // Se il modello presenta degli spazi, allora li elimino
            $modelloAuto = explode(' ', $array['modello']);
            $nomeCompleto = $nomeCompleto . $modelloAuto[0];
            for($i = 0; $i < count($modelloAuto); $i++){
                $nomeCompleto = $nomeCompleto . $modelloAuto[$i];
            }

            // Ora al nome aggiungo '_sinistra' e l'estensione
            $nomeCompleto = $nomeCompleto . '_sinistra' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompleto);
        }

        // Elaboro il nome dell'immagine del lato frontale
        if($request->hasFile('img_frontale')){
            $image = $request->file('img_frontale');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Se la marca presenta degli spazi, allora li elimino
            $marcaAuto = explode(' ', $array['marca']);
            $nomeCompleto = $marcaAuto[0];
            for($i = 0; $i < count($marcaAuto); $i++){
                $nomeCompleto = $nomeCompleto . $marcaAuto[$i];
            }

            // Se il modello presenta degli spazi, allora li elimino
            $modelloAuto = explode(' ', $array['modello']);
            $nomeCompleto = $nomeCompleto . $modelloAuto[0];
            for($i = 0; $i < count($modelloAuto); $i++){
                $nomeCompleto = $nomeCompleto . $modelloAuto[$i];
            }

            // Ora al nome aggiungo '_frontale' e l'estensione
            $nomeCompleto = $nomeCompleto . '_frontale' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompleto);
        }

        // Elaboro il nome dell'immagine del lato posteriore
        if($request->hasFile('img_posteriore')){
            $image = $request->file('img_posteriore');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Se la marca presenta degli spazi, allora li elimino
            $marcaAuto = explode(' ', $array['marca']);
            $nomeCompleto = $marcaAuto[0];
            for($i = 0; $i < count($marcaAuto); $i++){
                $nomeCompleto = $nomeCompleto . $marcaAuto[$i];
            }

            // Se il modello presenta degli spazi, allora li elimino
            $modelloAuto = explode(' ', $array['modello']);
            $nomeCompleto = $nomeCompleto . $modelloAuto[0];
            for($i = 0; $i < count($modelloAuto); $i++){
                $nomeCompleto = $nomeCompleto . $modelloAuto[$i];
            }

            // Ora al nome aggiungo '_posteriore' e l'estensione
            $nomeCompleto = $nomeCompleto . '_posteriore' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompleto);
        }

        return response()->json(['redirect' => route('gest-auto')]);
    }


    /**
     *  Ritorno la pagina riguardante la modifica un'auto, data la targa
    **/
    public function showModificaAuto($targa){
        $auto = Auto::find($targa);

        return view('staff/modifica-auto')->with(['auto' => $auto]);
    }


    /**
     *  Funzione che va a modificare l'auto selezionata
    **/
    public function modificaAuto(Request $request){
        $array = $request->all();

        // Modifico i dati dell'auto in base alla targa
        Auto::where('targa', $array['targa'])
              ->update([
                'marca' => $array['marca'],
                'modello' => $array['modello'],
                'targa' => $array['targa'],
                'anno' => $array['anno'],
                'nPosti' => $array['nPosti'],
                'motore' => $array['motore'],
                'carburante' => $array['carburante'],
                'username' => $array['username'],
                'descrizione' => $array['descrizione'],
                'prezzo' => $array['prezzo'],
                'data_inizio' => $array['data_inizio'],
                'data_fine' => $array['data_fine']
              ]);

        // Elaboro il nome dell'immagine principale
        if($request->hasFile('img_principale')){
            $image = $request->file('img_principale');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Se la marca presenta degli spazi, allora li elimino
            $marcaAuto = explode(' ', $array['marca']);
            $nomeCompleto = $marcaAuto[0];
            for($i = 0; $i < count($marcaAuto); $i++){
                $nomeCompleto = $nomeCompleto . $marcaAuto[$i];
            }

            // Se il modello presenta degli spazi, allora li elimino
            $modelloAuto = explode(' ', $array['modello']);
            $nomeCompleto = $nomeCompleto . $modelloAuto[0];
            for($i = 0; $i < count($modelloAuto); $i++){
                $nomeCompleto = $nomeCompleto . $modelloAuto[$i];
            }

            // Ora al nome aggiungo '_principale' e l'estensione
            $nomeCompleto = $nomeCompleto . '_principale' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompleto);
        }

        // Elaboro il nome dell'immagine del lato destro
        if($request->hasFile('img_destra')){
            $image = $request->file('img_destra');
            $nomeImg = $image->getClientOriginalName();

            // Separo il nome dall'estensione
            $arrayImg = explode('.', $nomeImg);
            
            // Se la marca presenta degli spazi, allora li elimino
            $marcaAuto = explode(' ', $array['marca']);
            $nomeCompleto = $marcaAuto[0];
            for($i = 0; $i < count($marcaAuto); $i++){
                $nomeCompleto = $nomeCompleto . $marcaAuto[$i];
            }

            // Se il modello presenta degli spazi, allora li elimino
            $modelloAuto = explode(' ', $array['modello']);
            $nomeCompleto = $nomeCompleto . $modelloAuto[0];
            for($i = 0; $i < count($modelloAuto); $i++){
                $nomeCompleto = $nomeCompleto . $modelloAuto[$i];
            }

            // Ora al nome aggiungo '_destra' e l'estensione
            $nomeCompleto = $nomeCompleto . '_destra' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompleto);
        }

        // Elaboro il nome dell'immagine del lato sinistro
        if($request->hasFile('img_sinistra')){
            $image = $request->file('img_sinistra');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Se la marca presenta degli spazi, allora li elimino
            $marcaAuto = explode(' ', $array['marca']);
            $nomeCompleto = $marcaAuto[0];
            for($i = 0; $i < count($marcaAuto); $i++){
                $nomeCompleto = $nomeCompleto . $marcaAuto[$i];
            }

            // Se il modello presenta degli spazi, allora li elimino
            $modelloAuto = explode(' ', $array['modello']);
            $nomeCompleto = $nomeCompleto . $modelloAuto[0];
            for($i = 0; $i < count($modelloAuto); $i++){
                $nomeCompleto = $nomeCompleto . $modelloAuto[$i];
            }

            // Ora al nome aggiungo '_sinistra' e l'estensione
            $nomeCompleto = $nomeCompleto . '_sinistra' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompleto);
        }

        // Elaboro il nome dell'immagine del lato frontale
        if($request->hasFile('img_frontale')){
            $image = $request->file('img_frontale');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Se la marca presenta degli spazi, allora li elimino
            $marcaAuto = explode(' ', $array['marca']);
            $nomeCompleto = $marcaAuto[0];
            for($i = 0; $i < count($marcaAuto); $i++){
                $nomeCompleto = $nomeCompleto . $marcaAuto[$i];
            }

            // Se il modello presenta degli spazi, allora li elimino
            $modelloAuto = explode(' ', $array['modello']);
            $nomeCompleto = $nomeCompleto . $modelloAuto[0];
            for($i = 0; $i < count($modelloAuto); $i++){
                $nomeCompleto = $nomeCompleto . $modelloAuto[$i];
            }

            // Ora al nome aggiungo '_frontale' e l'estensione
            $nomeCompleto = $nomeCompleto . '_frontale' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompleto);
        }

        // Elaboro il nome dell'immagine del lato posteriore
        if($request->hasFile('img_posteriore')){
            $image = $request->file('img_posteriore');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Se la marca presenta degli spazi, allora li elimino
            $marcaAuto = explode(' ', $array['marca']);
            $nomeCompleto = $marcaAuto[0];
            for($i = 0; $i < count($marcaAuto); $i++){
                $nomeCompleto = $nomeCompleto . $marcaAuto[$i];
            }

            // Se il modello presenta degli spazi, allora li elimino
            $modelloAuto = explode(' ', $array['modello']);
            $nomeCompleto = $nomeCompleto . $modelloAuto[0];
            for($i = 0; $i < count($modelloAuto); $i++){
                $nomeCompleto = $nomeCompleto . $modelloAuto[$i];
            }

            // Ora al nome aggiungo '_posteriore' e l'estensione
            $nomeCompleto = $nomeCompleto . '_posteriore' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompleto);
        }

        return redirect('gest-auto');
    }


    /**
     *  Funzione che va ad eliminare l'auto selezionata
    **/
    public function eliminaAuto($targa){
        Auto::destroy($targa);

        return redirect('gest-auto');
    }


    /**
     *  Ritorna la lista delle auto noleggiate un certo mese
    **/
    public function storicoAutoMese(Request $request){
        return json_encode(Auto::where('data_inizio', $request->dataInizio)->get());
    }
}
