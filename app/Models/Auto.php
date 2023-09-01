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
        /*'img_principale',
        'img_destra',
        'img_sinistra',
        'img_frontale',
        'img_posteriore'*/
    ];

    protected $hidden = ['targa'];

    /**
     * Metodo che restituisce il prezzo giornaliero del noleggio della vettura
     */
    public function getDailyPrice() {
        $prezzo = $this->prezzo;
        return $prezzo;
    }

    /** 
     * Relazione One-To-One con Categoria
     */
    public function carCat() {
        return $this->hasOne(Categoria::class, 'catId', 'catId');
    }
}
