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
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('edad');
            $table->string('nombreesposo');
            $table->string('pesoanterior');
            $table->string('talla');
            $table->string('gestas');
            $table->string('paridad');
            $table->string('abortos');
            $table->string('cesarias');
            $table->string('fur');
            $table->string('fpp');
            $table->string('fuma');
            $table->string('numcigarros');
            $table->string('alcoholismo');
            $table->string('vih');
            $table->string('vorl');
            $table->string('hb');
            $table->string('glicemia');
            $table->string('ego');
            $table->string('diabetes');
            $table->string('tbpulmonar');
            $table->string('otros');
            $table->string('lueticas');
            $table->string('grupo');
            $table->string('rh');
            $table->string('grupo2');
            $table->string('rh2');
            $table->string('sensibilizacion');
            $table->string('anttrans');
            $table->string('pesoanterior2');
            $table->string('cardiopatias');
            $table->string('hipertension');
            $table->string('diabetes2');
            $table->string('infprimaria');
            $table->string('tbpulmonar2');
            $table->string('intquir');
            $table->string('patpsi');
            $table->string('rubeola');
            $table->string('convulciones');
            $table->string('otrosdos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimientos');
    }
};
