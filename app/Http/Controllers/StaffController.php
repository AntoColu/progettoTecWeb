<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use App\Http\Requests\NewAutoRequest;

class StaffController extends Controller
{
    /**
     *  Ritorno la pagina riguardante la homepage dello staff
    **/
    public function showHomeStaff(){
        return view('staff/home-staff');
    }

    /**
     *  Ritorno la pagina riguardante la gestione delle auto, passando la lista delle auto
    **/
    public function showGestioneAuto(){
        $automobili = Auto::paginate(6);
        return view('staff/gestione-auto')->with('automobili', $automobili);
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
    public function inserisciAuto(NewAutoRequest $request){
        //dd($request->all());
        $nomeCompletoImg = $this->getImgName($request->all());
        //dd($nomeCompletoImg);

        $nuova_auto = new Auto();
        $nuova_auto->fill($request->validated());
        $nuova_auto->nome_img = $nomeCompletoImg;
        $nuova_auto->save();
        //dd($nuova_auto);

        // Elaboro il nome dell'immagine principale
        if($request->hasFile('img_principale')){
            $image = $request->file('img_principale');

            // Ora al nome aggiungo '_principale' e l'estensione
            $nomeCompletoImg .= '_principale' . '.' . 'jpg';

            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato destro
        if($request->hasFile('img_destra')){
            $image = $request->file('img_destra');

            // Devo reimpostare nuovamente il nome su <Marca><Modello>
            // altrimenti il nome verrebbe concatenato a quello dell'if precedente
            $nomeCompletoImg = $this->getImgName($request->all()); 

            // Ora al nome aggiungo '_destra' e l'estensione
            $nomeCompletoImg .= '_destra' . '.' . 'jpg';
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato sinistro
        if($request->hasFile('img_sinistra')){
            $image = $request->file('img_sinistra');

            // Devo reimpostare nuovamente il nome su <Marca><Modello>
            // altrimenti il nome verrebbe concatenato a quello dell'if precedente
            $nomeCompletoImg = $this->getImgName($request->all()); 

            // Ora al nome aggiungo '_sinistra' e l'estensione
            $nomeCompletoImg .= '_sinistra' . '.' . 'jpg';
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato frontale
        if($request->hasFile('img_frontale')){
            $image = $request->file('img_frontale');
            
            // Devo reimpostare nuovamente il nome su <Marca><Modello>
            // altrimenti il nome verrebbe concatenato a quello dell'if precedente
            $nomeCompletoImg = $this->getImgName($request->all()); 

            // Ora al nome aggiungo '_frontale' e l'estensione
            $nomeCompletoImg .= '_frontale' . '.' . 'jpg';
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato posteriore
        if($request->hasFile('img_posteriore')){
            $image = $request->file('img_posteriore');
            
            // Devo reimpostare nuovamente il nome su <Marca><Modello>
            // altrimenti il nome verrebbe concatenato a quello dell'if precedente
            $nomeCompletoImg = $this->getImgName($request->all()); 

            // Ora al nome aggiungo '_posteriore' e l'estensione
            $nomeCompletoImg .= '_posteriore' . '.' . 'jpg';
            
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
        
        $request->validate([
            'marca' => ['nullable', 'string', 'max:255'],
            'modello' => ['nullable', 'string', 'max:255'],
            'anno' => ['nullable', 'integer'],
            'nPosti' => ['nullable', 'integer'],
            'motore' => ['nullable', 'string', 'max:255'],
            'carburante' => ['nullable', 'string', 'max:255'],
            'catId' => ['nullable', 'integer'],
            'descrizione' => ['nullable', 'string', 'max:255'],
            'prezzo' => ['nullable', 'integer', 'min:1'],
        ]);

        // Modifico i dati dell'auto in base alla targa
        $auto_mod = Auto::find($request->targa);

        // Se la faq non esiste, torno alla gestione faq
        if (!$auto_mod) {
            return redirect()->route('gestione-auto')->withErrors(['auto-non-trovata' => 'Auto non trovata']);
        }

        if($request->marca != null){
            $auto_mod->marca = $request->marca;
        }
        if($request->modello != null){
            $auto_mod->modello = $request->modello;
        }
        if($request->anno != null){
            $auto_mod->anno = $request->anno;
        }
        if($request->nPosti != null){
            $auto_mod->nPosti = $request->nPosti;
        }
        if($request->motore != null){
            $auto_mod->motore = $request->motore;
        }
        if($request->carburante != null){
            $auto_mod->carburante = $request->carburante;
        }
        if($request->catId != null){
            $auto_mod->catId = $request->catId;
        }
        if($request->descrizione != null){
            $auto_mod->descrizione = $request->descrizione;
        }
        if($request->prezzo != null){
            $auto_mod->prezzo = $request->prezzo;
        }
        
        $auto_mod->save();

        
        // Elaboro il nome dell'immagine principale
        if($request->hasFile('img_principale')){
            $image = $request->file('img_principale');
            $nomeImg = $auto_mod->nome_img;

            // Ora al nome aggiungo '_principale' e l'estensione
            $nomeCompletoImg = $nomeImg . '_principale' . '.' . 'jpg';

            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato destro
        if($request->hasFile('img_destra')){
            $image = $request->file('img_destra');
            $nomeImg = $auto_mod->nome_img;

            // Ora al nome aggiungo '_destra' e l'estensione
            $nomeCompletoImg = $nomeImg . '_destra' . '.' . 'jpg';
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato sinistro
        if($request->hasFile('img_sinistra')){
            $image = $request->file('img_sinistra');
            $nomeImg = $auto_mod->nome_img;

            // Ora al nome aggiungo '_sinistra' e l'estensione
            $nomeCompletoImg = $nomeImg . '_sinistra' . '.' . 'jpg';
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato frontale
        if($request->hasFile('img_frontale')){
            $image = $request->file('img_frontale');
            $nomeImg = $auto_mod->nome_img;

            // Ora al nome aggiungo '_frontale' e l'estensione
            $nomeCompletoImg = $nomeImg . '_frontale' . '.' . 'jpg';
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        // Elaboro il nome dell'immagine del lato posteriore
        if($request->hasFile('img_posteriore')){
            $image = $request->file('img_posteriore');
            $nomeImg = $auto_mod->nome_img;

            // Ora al nome aggiungo '_posteriore' e l'estensione
            $nomeCompletoImg = $nomeImg . '_posteriore' . '.' . 'jpg';
            
            // Sposta l'immagine
            $destinationPath = public_path() . '/images/auto';
            $image->move($destinationPath, $nomeCompletoImg);
        }

        return redirect('gestione-auto')->with('success', 'Auto modificata con successo');
    }


    /** 
     *  Funzione che costruisce il nome che verrà assegnato alle immagini di un'auto.
     *  Il nome sarà formato <Marca><Modello> senza nessuno spazio.
    **/
    public function getImgName($array){
        // Se la marca presenta degli spazi, allora li elimino
        $marcaAuto = explode(' ', $array['marca']);
        $nomeCompletoImg = $marcaAuto[0];

        // Inserisco nel nome completo solo elementi distinti, non ci devono essere ripetizioni
        foreach ($marcaAuto as $index => $parteMarca) {
            if ($index > 0 && $parteMarca !== $marcaAuto[$index - 1]) {
                $nomeCompletoImg .= $parteMarca;
            }
        }

        // Se il modello presenta degli spazi, allora li elimino
        $modelloAuto = explode(' ', $array['modello']);
        $nomeCompletoImg = $nomeCompletoImg . $modelloAuto[0];

        // Inserisco nel nome completo solo elementi distinti, non ci devono essere ripetizioni
        foreach ($modelloAuto as $index => $parteModello) {
            if ($index > 0 && $parteModello !== $modelloAuto[$index - 1]) {
                $nomeCompletoImg .= $parteModello;
            }
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
        return view('staff/storico-noleggi')->with(['auto_filtrate' => false]);
    }


    /**
     *  Ritorno la lista delle auto noleggiate un certo mese
    **/
    public function storicoAutoMese(Request $request){
         //dd($request->mese_inizio);
        $auto_filtrate = Auto::whereMonth('data_inizio', $request->mese_inizio)
                            ->where('data_inizio', '!=' , '1990-01-01') // Mi assicuro che le date di inizio e fine siano diverse da quelle di default
                            ->where('data_fine', '!=' , '1990-01-01')
                            ->paginate(6);
        

        if($auto_filtrate->count() != 0){
            //dd($auto_filtrate);
            return view('staff/storico-noleggi')->with(['auto_filtrate' => $auto_filtrate]);
        }
        else{
            return redirect()->route('storico-noleggi')->withErrors(['auto-non-trovate' => 'Non è stata noleggiata nessuna macchina in questo mese']);
        }
    }
}
