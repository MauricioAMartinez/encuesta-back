<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('respuesta_uno');
            $table->string('respuesta_dos');
            $table->string('respuesta_tres');
            $table->string('respuesta_cuatro');
            $table->string('respuesta_cinco');
            $table->integer('respuesta_seis');
            $table->integer('respuesta_siete');
            $table->integer('respuesta_ocho');
            $table->integer('respuesta_nueve');
            $table->integer('respuesta_diez');
            $table->integer('respuesta_once');
            $table->integer('respuesta_doce');
            $table->string('respuesta_trece');
            $table->foreignId('pregunta_id')->constrained();
            $table->foreignId('correo_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
