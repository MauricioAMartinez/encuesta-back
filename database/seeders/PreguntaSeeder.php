<?php

namespace Database\Seeders;

use App\Models\pregunta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pregunta = new pregunta();
        $pregunta->pregunta_uno = 'Nombre completo cliente';
        $pregunta->pregunta_dos = 'Campaña (CECO)';
        $pregunta->pregunta_tres = 'Área en la que se desempeña';
        $pregunta->pregunta_cuatro = '';
        $pregunta->pregunta_cinco = 'Gerente quien recibió el requerimiento';
        $pregunta->pregunta_seis = '¿Me encuentro satisfecho con el producto/desarrollo/servicio entregado?';
        $pregunta->pregunta_siete = '¿El tiempo tomado en el requerimiento de este producto/desarrollo/servicio fue adecuado?';
        $pregunta->pregunta_ocho = '¿El tiempo tomado para desarrollar el producto/desarrollo/servicio fue adecuado';
        $pregunta->pregunta_nueve = '¿Qué tan receptivo ha sido nuestro equipo de servicio al cliente a sus preguntas y preocupaciones?';
        $pregunta->pregunta_diez = '¿Me encuentro satisfecho con la compañía, en general?';
        $pregunta->pregunta_once = '¿Nuestros productos y servicios superaron sus expectativas';
        $pregunta->pregunta_doce = 'De acuerdo a su experiencia, ¿estaría dispuesto a recomendar a Montechelo a un colega o amigo?';
        $pregunta->pregunta_trece = 'comentarios';
        $pregunta->save();
    }
}
