<?php

namespace App\Models;

use App\Models\Categoria;
use App\Models\Auto;
use App\Models\Faq;

class Admin
{
    /**
     * Metodo che restituisce tutte le faq
     */
    public function getFaq(){
        return Faq::all();
    }

    /**
     * Metodo che restituisce una determinata faq con un certo $id
     */
    public function getFaqById($id){
        return Faq::find($id);
    }

    /**
     * Metodo che restituisce tutte le auto
     */
    public function getCars(){
        return Auto::all();
    }

    /**
     * Metodo che restituisce le auto in base alla categoria
     */
    public function getCarsByCat($catId){
        return Auto::find($catId);
    }

    /**
     * Metodo che restituisce le auto in base alla marca
     */
    public function getCarsByBrand($marca){
        return Auto::find($marca);
    }
}
