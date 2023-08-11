<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $table = 'auto';
    protected $primaryKey = 'targa';
    public $incrementing = false;
    public $timestamps = false;
    
    protected $fillable = [
        'marca',
        'modello',
        'targa',
        'anno',
        'nPosti',
        'allestimento',
        'catId',
        'descrizione',
        'prezzo',
        'foto'
    ];

    protected $hidden = ['targa'];
}
