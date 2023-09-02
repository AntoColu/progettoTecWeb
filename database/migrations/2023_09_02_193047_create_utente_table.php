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
        Schema::create('utente', function (Blueprint $table) {
            $table->string('nome',255);
            $table->string('cognome',255);
            $table->string('residenza',255);
            $table->date('nascita');
            $table->string('email',255);
            $table->string('occupazione',255);
            $table->string('username',255)->primary();
            $table->string('password',255);
            $table->string('ruolo',6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utente');
    }
};
