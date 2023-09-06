<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto', function (Blueprint $table) {
            $table->string('marca',255);
            $table->string('modello',255);
            $table->string('targa',7)->primary();
            $table->integer('anno')->unsigned();
            $table->integer('nPosti')->unsigned();
            $table->string('motore',255);
            $table->string('carburante',255);
            $table->string('username',255);

            $table->integer('catId')->unsigned();
            $table->foreign('catId')
                ->references('catId') // Campo riferito nella tabella 'categoria'
                ->on('categoria');    // Nome della tabella 'categoria'

            $table->string('descrizione',255);
            $table->integer('prezzo')->unsigned();
            $table->date('data_inizio');
            $table->date('data_fine');
            $table->string('nome_img',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto');
    }
};
