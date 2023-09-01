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
            $table->string('targa',255)->primary();
            $table->integer('anno');
            $table->integer('nPosti');
            $table->string('motore',255);
            $table->string('carburante',255);
            $table->string('descrizione',255);
            $table->integer('prezzo');
            $table->string('data_inizio',255);
            $table->string('data_fine',255);
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
