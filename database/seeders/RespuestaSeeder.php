<?php

namespace Database\Seeders;

use App\Models\respuesta;
use Illuminate\Database\Seeder;

class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $respuesta = new respuesta();
        $respuesta->respuesta_uno = 'Nombre Cliente';
        $respuesta->respuesta_dos = 'Campaña ';
        $respuesta->respuesta_tres = 'Area';
        $respuesta->respuesta_cuatro = 'Nombre Po';
        $respuesta->respuesta_cinco = 'Gerente';
        $respuesta->respuesta_seis = '5';
        $respuesta->respuesta_siete = '5';
        $respuesta->respuesta_ocho = '5';
        $respuesta->respuesta_nueve = '5';
        $respuesta->respuesta_diez = '5';
        $respuesta->respuesta_once = '5';
        $respuesta->respuesta_doce = '5';
        $respuesta->respuesta_trece = 'Sin comentarios';
        $respuesta->pregunta_id = '1';
        $respuesta->correo_id = '1';
        $respuesta->save();
    }
}
