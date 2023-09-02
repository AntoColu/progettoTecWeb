<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $nomeCompletoImg = $this->getImgName($array);

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
            'data_fine' => $array['data_fine'],
            'nome_img' => $nomeCompletoImg
        ]);
        

        // Elaboro il nome dell'immagine principale
        if($request->hasFile('img_principale')){
            $image = $request->file('img_principale');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Ora al nome aggiungo '_principale' e l'estensione
            $nomeCompletoImg = $nomeCompletoImg . '_principale' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato destro
        if($request->hasFile('img_destra')){
            $image = $request->file('img_destra');
            $nomeImg = $image->getClientOriginalName();

            // Separo il nome dall'estensione
            $arrayImg = explode('.', $nomeImg);
            
            // Ora al nome aggiungo '_destra' e l'estensione
            $nomeCompletoImg = $nomeCompletoImg . '_destra' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato sinistro
        if($request->hasFile('img_sinistra')){
            $image = $request->file('img_sinistra');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Ora al nome aggiungo '_sinistra' e l'estensione
            $nomeCompletoImg = $nomeCompletoImg . '_sinistra' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato frontale
        if($request->hasFile('img_frontale')){
            $image = $request->file('img_frontale');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Ora al nome aggiungo '_frontale' e l'estensione
            $nomeCompletoImg = $nomeCompletoImg . '_frontale' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato posteriore
        if($request->hasFile('img_posteriore')){
            $image = $request->file('img_posteriore');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            // Ora al nome aggiungo '_posteriore' e l'estensione
            $nomeCompletoImg = $nomeCompletoImg . '_posteriore' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        return response()->json(['redirect' => route('gestione-auto')]);
    }


    /**
     *  Ritorno la pagina riguardante la modifica di un'auto, data la targa
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
        $nomeCompletoImg = $this->getImgName($array);

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
                'data_fine' => $array['data_fine'],
                'nome_img' => $nomeCompletoImg
              ]);

        // Elaboro il nome dell'immagine principale
        if($request->hasFile('img_principale')){
            $image = $request->file('img_principale');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            $nomeCompletoImg = $this->getImgName($array);

            // Ora al nome aggiungo '_principale' e l'estensione
            $nomeCompletoImg = $nomeCompletoImg . '_principale' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato destro
        if($request->hasFile('img_destra')){
            $image = $request->file('img_destra');
            $nomeImg = $image->getClientOriginalName();

            // Separo il nome dall'estensione
            $arrayImg = explode('.', $nomeImg);
            
            $nomeCompletoImg = $this->getImgName($array);

            // Ora al nome aggiungo '_destra' e l'estensione
            $nomeCompletoImg = $nomeCompletoImg . '_destra' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato sinistro
        if($request->hasFile('img_sinistra')){
            $image = $request->file('img_sinistra');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            $nomeCompletoImg = $this->getImgName($array);

            // Ora al nome aggiungo '_sinistra' e l'estensione
            $nomeCompletoImg = $nomeCompletoImg . '_sinistra' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato frontale
        if($request->hasFile('img_frontale')){
            $image = $request->file('img_frontale');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            $nomeCompletoImg = $this->getImgName($array);

            // Ora al nome aggiungo '_frontale' e l'estensione
            $nomeCompletoImg = $nomeCompletoImg . '_frontale' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato posteriore
        if($request->hasFile('img_posteriore')){
            $image = $request->file('img_posteriore');
            $nomeImg = $image->getClientOriginalName();

            $arrayImg = explode('.', $nomeImg);
            
            $nomeCompletoImg = $this->getImgName($array);

            // Ora al nome aggiungo '_posteriore' e l'estensione
            $nomeCompletoImg = $nomeCompletoImg . '_posteriore' . '.' . $arrayImg[1];
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        return redirect('gestione-auto');
    }


    /** 
     *  Funzione che costruisce il nome che verrà assegnato alle immagini di un'auto.
     *  Il nome sarà formato <Marca><Modello> senza nessuno spazio.
    **/
    public function getImgName($array){
        // Se la marca presenta degli spazi, allora li elimino
        $marcaAuto = explode(' ', $array['marca']);
        $nomeCompletoImg = $marcaAuto[0];
        for($i = 0; $i < count($marcaAuto); $i++){
            $nomeCompletoImg = $nomeCompletoImg . $marcaAuto[$i];
        }

        // Se il modello presenta degli spazi, allora li elimino
        $modelloAuto = explode(' ', $array['modello']);
        $nomeCompletoImg = $nomeCompletoImg . $modelloAuto[0];
        for($i = 0; $i < count($modelloAuto); $i++){
            $nomeCompletoImg = $nomeCompletoImg . $modelloAuto[$i];
        }

        return $nomeCompletoImg;
    }


    /**
     *  Funzione che va ad eliminare l'auto selezionata
    **/
    public function eliminaAuto($targa){
        if(Auto::destroy($targa)){
            return redirect()->route('gestione-auto')->with('success', 'Auto eliminata con successo');
        }
        else{
            return redirect()->route('gestione-auto')->withErrors(['auto-non-eliminata' => 'Eliminazione non effettuata']);
        }
    }


    /**
     *  Ritorno la pagina riguardante lo storico dei noleggi.
     * 
     *  La pagina non presenterà nessuna auto all'inizio, dato che l'utente
     *  deve compilare la form con un mese
    **/
    public function showStorico(){
        return view('staff/storico-noleggi');
    }


    /**
     *  Ritorno la lista delle auto noleggiate un certo mese
    **/
    public function storicoAutoMese(Request $request){
        $auto_filtrate = Auto::whereMonth('data_inizio', $request->meseInizio)->get();

        return view('staff/storico-noleggi')->with(['auto_filtrate' => $auto_filtrate]);
    }
}
