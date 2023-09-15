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
        Schema::create('messaggio', function (Blueprint $table) {
            $table->increments('id');

            $table->string('mittente',255);
            $table->foreign('mittente')
                ->references('username')
                ->on('utente')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('destinatario',255);
            $table->foreign('destinatario')
                ->references('username')
                ->on('utente')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->mediumText('messaggio');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messaggio');
    }
};
