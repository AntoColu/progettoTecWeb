<?php

namespace App\Models;

use App\Models\Categoria;
use App\Models\Auto;

class Admin
{
    public function getCarsCats() {
        return Categoria::where('parId', '!=', 0)->get();
    }

    // FARE LE ALTRE FUNZIONI
}
