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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->string('fecha')->nullable();
            $table->string('amenorrea')->nullable();
            $table->string('nauseas')->nullable();
            $table->string('cefalea')->nullable();
            $table->string('edena')->nullable();
            $table->string('movimientosfetales')->nullable();
            $table->string('pesocorporal')->nullable();
            $table->string('tensionarterial')->nullable();
            $table->string('alturauterina')->nullable();
            $table->string('latfetal')->nullable();
            $table->string('situacion')->nullable();
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
        Schema::dropIfExists('consultas');
    }
};
