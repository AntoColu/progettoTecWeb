<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Faq;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    ///*******************************************///
    /**  AREA DEDICATA ALLA GESTIONE DELLO STAFF  **/
    ///*******************************************///
 
    /**
     *  Ritorno la pagina riguardante la gestione dello staff, passando la lista dei membri dello staff
    **/
    public function showGestioneStaff(){
        return view('admin/gestione-staff')->with('membri_staff', User::where('ruolo', 'staff')->get());
    }


    /**
     *  Ritorno la pagina riguardante l'inserimento di un nuovo membro dello staff
    **/
    public function showInserisciStaff(){
        return view('admin/inserisci-staff');
    }


    /**
     *  Funzione che inserisce un nuovo membro dello staff
    **/
    public function inserisciStaff(Request $request){
        // Controllo se lo username inserito esiste già:
        // in caso affermativo l'admin viene reindirizzato di nuovo alla pagina di inserimento
        // con un messaggio d'errore
        if(User::find($request->username)){
            return redirect()->route('inserisci-staff')->withErrors(['errore-inserimento-staff' => 'Username già utilizzato da un altro utente']);
        }
        // se il nuovo username non è ancora stato usato, allora effettuo l'inserimento del membro dello staff
        else{
            // Crea il nuovo membro dello staff
            User::create([
                'nome' => $request->nome,
                'cognome' => $request->cognome,
                'residenza' => $request->residenza,
                'nascita' => $request->nascita,
                'email' => $request->email,
                'occupazione' => $request->occupazione,
                'username' => $request->username,
                'password' => $request->password,
                'ruolo' => $request->ruolo
            ]);

            return redirect()->route('gestione-staff')->with('success', 'Nuovo membro aggiunto con successo');
        }
    }


    /**
     *  Ritorno la pagina riguardante la modifica di un membro dello staff, 
     *  dato lo username
    **/
    public function showModificaStaff($username){
        $staff = User::find($username);

        return view('admin/modifica-staff')->with(['staff' => $staff]);
    }


    /**
     *  Funzione che va a modificare il membro dello staff selezionato
    **/
    public function modificaStaff(Request $request){
        // Controllo se lo username inserito esiste già:
        // in caso affermativo l'admin viene reindirizzato di nuovo alla pagina di modifica
        // con un messaggio d'errore
        if(User::find($request->username)){
            return redirect()->route('modifica-staff')->withErrors(['errore-modifica-staff' => 'Username già utilizzato da un altro utente']);
        }
        // se il nuovo username non è ancora stato usato, allora effettuo la modifica del membro dello staff
        else{
            $staff = new User();

            $staff->nome = $request->nome;
            $staff->cognome = $request->cognome;
            $staff->residenza = $request->residenza;
            $staff->nascita = $request->nascita;
            $staff->email = $request->email;
            $staff->occupazione = $request->occupazione;
            $staff->username = $request->username;
            $staff->password = $request->password;
            $staff->ruolo = $request->ruolo;

            $staff->save();

            return redirect()->route('gestione-staff')->with('success', 'Nuovo membro aggiunto con successo');
        }
    }


    /**
     *  Funzione che va ad eliminare il membro dello staff selezionato
    **/
    public function eliminaStaff($username){
        if(User::destroy($username)){
            return redirect()->route('gestione-staff')->with('success', 'Membro eliminato con successo');
        }
        else{
            return redirect()->route('gestione-staff')->withErrors(['staff-non-eliminato' => 'Eliminazione non effettuata']);
        }
    }



    ///*******************************************///
    /**  AREA DEDICATA ALLA GESTIONE DEI CLIENTI  **/
    ///*******************************************///
 
    /**
     *  Ritorno la pagina riguardante la gestione dei clienti, passando la lista dei clienti
    **/
    public function showGestioneClienti(){
        return view('admin/gestione-clienti')->with('clienti', User::where('ruolo', 'user')->get());
    }


    /**
     *  Funzione elimina il cliente selezionato
    **/
    public function eliminaClienti($username){
        if(User::destroy($username)){
            return redirect()->route('gestione-clienti')->with('success', 'Cliente eliminato con successo');
        }
        else{
            return redirect()->route('gestione-clienti')->withErrors(['cliente-non-eliminato' => 'Eliminazione non effettuata']);
        }
    }



    ///*****************************************///
    /**  AREA DEDICATA ALLA GESTIONE DELLE FAQ  **/
    ///*****************************************///
 
    /**
     *  Ritorno la pagina riguardante la gestione delle faq, passando la lista delle faq
    **/
    public function showGestioneFaq(){
        return view('admin/gestione-faq')->with('faqs', Faq::all());
    }


    /**
     *  Ritorno la pagina riguardante l'inserimento di una nuova faq
    **/
    public function showInserisciFaq(){
        return view('admin/inserisci-faq');
    }


    /**
     *  Funzione che inserisce una nuova faq
    **/
    public function inserisciFaq(Request $request){
        Faq::create([
            'domanda' => $request->domanda,
            'risposta' => $request->risposta
        ]);

        return redirect()->route('gestione-faq')->with('success', 'Nuova faq aggiunta con successo');
    }


    /**
     *  Ritorno la pagina riguardante la modifica di una faq
    **/
    public function showModificaFaq(){
        return view('admin/modifica-faq');
    }


    /**
     *  Funzione che modifica una faq
    **/
    public function modificaFaq(Request $request){
        $faq = Faq::find($request->faqId);
        
        $faq->domanda = $request->domanda;
        $faq->risposta = $request->risposta;

        $faq->save();

        return redirect()->route('gestione-faq')->with('success', 'Faq modificata con successo');
    }


    /**
     *  Funzione che elimina una faq in base all'id
    **/
    public function eliminaFaq($faqId){
        if(Faq::destroy($faqId)){
            return redirect()->route('gestione-faq')->with('success', 'Faq eliminata con successo');
        }
        else{
            return redirect()->route('gestione-faq')->withErrors(['faq-non-eliminata' => 'Eliminazione non effettuata']);
        }
    }



    ///**********************************///
    /**  AREA DEDICATA ALLE STATISTICHE  **/
    ///**********************************///
 
    /**
     *  Ritorno la pagina riguardante le statistiche di noleggio auto
    **/
    public function showStatistiche(){
        return view('admin/statistiche');
    }


    /**
     *  Fuznione che calcola il numero di auto noleggiate nel mese selezionato,
     *  nell'anno corrente
    **/
    public function statisticheAuto(Request $request){
        $anno_corrente = date('Y'); // Prendo l'anno corrente

        $num_auto = Auto::whereYear('data_inizio', $anno_corrente)
                    ->whereMonth('data_inizio', $request->meseInizio)
                    ->count();

        return json_encode($num_auto);
        //return view('admin/statistiche')->with(['num_auto' => $num_auto]);
    }
}
