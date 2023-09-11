<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\User;
use App\Models\FAQ;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     *  Mostra la homepage
    **/
    public function showHome() {
        $faqs = Faq::all();
        return view('public/home')->with('faqs', $faqs);
    }

    /**
     *  Mostra la pagina dei contatti
    **/
    public function showContatti() {
        return view('public/contatti');
    }

    /**
     *  Mostra la pagina del catalogo
    **/
    public function showCatalogo() {
        $automobili = Auto::paginate(6);
        return view('public/catalogo')
            ->with('automobili', $automobili)
            ->with('minprezzo', '')
            ->with('maxprezzo', '');
    }

    /**
     *  Mostra il catalogo filtrato
    **/
    public function showCatalogoFiltrato(Request $request) {
       
        $array_auto = $request->all();
        //dd($array_auto);

        // Controllo se il prezzo minimo è stato impostato, altrimenti lo imposto a 0
        if($array_auto['min-prezzo'] == '')
            $min_prezzo = 0;
        else
            $min_prezzo = $array_auto['min-prezzo'];

        // Controllo se il prezzo massimo è stato impostato, altrimenti lo imposto a 99999
        if($array_auto['max-prezzo'] == '')
            $max_prezzo = 99999;
        else
            $max_prezzo = $array_auto['max-prezzo'];

        if($array_auto['catId'] == ''){
            // Ottengo tutte le auto che hanno un prezzo compreso tra il minimo e il massimo
            $automobili = Auto::where('prezzo', '>=', $min_prezzo)
                                ->where('prezzo', '<=', $max_prezzo)
                                ->paginate(6);
        }
        else{
            // Ottengo tutte le auto che hanno un prezzo compreso tra il minimo e il massimo
            $automobili = Auto::where('prezzo', '>=', $min_prezzo)
                                ->where('prezzo', '<=', $max_prezzo)
                                ->where('catId', $array_auto['catId'])
                                ->paginate(6);
        }

        // Se non ci sono automobili che hanno quel tipo di prezzo allora ritorno false
        if($automobili->count() == 0)
            return view('public/catalogo')->with('automobili', false);
        // Altrimenti ritorno le automobili acquisite con la query
        else
            return view('public/catalogo')->with('automobili', $automobili);
    }


    /**
     *  Mostra la pagina che stampa tutte le informazioni dell'auto selezionata
    **/
    public function showDettagliAuto($targa){
        return view('public/dettagli-auto')->with('auto', Auto::find($targa));
    }
}
