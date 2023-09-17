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
        'motore',
        'carburante',
        'username',
        'catId',
        'descrizione',
        'prezzo',
        'data_inizio',
        'data_fine',
        'nome_img'
    ];

    protected $hidden = ['targa'];

    /** 
     * Relazione One-To-One con Categoria
     */
    public function carCat() {
        return $this->hasOne(Categoria::class, 'catId', 'catId');
    }
}
