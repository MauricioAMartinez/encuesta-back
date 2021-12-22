<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pregunta_uno');
            $table->string('pregunta_dos');
            $table->string('pregunta_tres');
            $table->string('pregunta_cuatro');
            $table->string('pregunta_cinco');
            $table->string('pregunta_seis');
            $table->string('pregunta_siete');
            $table->string('pregunta_ocho');
            $table->string('pregunta_nueve');
            $table->string('pregunta_diez');
            $table->string('pregunta_once');
            $table->string('pregunta_doce');
            $table->string('pregunta_trece');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
