<?php

namespace App\Exports;

use App\Models\Correo;
use App\Models\respuesta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class CorreosExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'Correo',
            'Nombre completo cliente',
            'Campaña (CECO)',
            'Área en la que se desempeña',
            'PO con quien trabajó el proyecto',
            'Gerente quien recibió el requerimiento',
            '¿Me encuentro satisfecho con el producto/desarrollo/servicio entregado?',
            '¿El tiempo tomado en el requerimiento de este producto/desarrollo/servicio fue adecuado?',
            '¿El tiempo tomado para desarrollar el producto/desarrollo/servicio fue adecuado',
            '¿Qué tan receptivo ha sido nuestro equipo de servicio al cliente a sus preguntas y preocupaciones?',
            '¿Me encuentro satisfecho con la compañía, en general?',
            '¿Nuestros productos y servicios superaron sus expectativas',
            'De acuerdo a su experiencia, ¿estaría dispuesto a recomendar a Montechelo a un colega o amigo?',
            'comentarios',
        ];
    }
    public function collection()
    
    {
        //return Respuesta::with('correo')->get();
        //return Respuesta::with('correo')->select('correo_id','respuesta_uno','respuesta_dos','respuesta_tres','respuesta_cuatro','respuesta_cinco','respuesta_seis','respuesta_siete','respuesta_ocho','respuesta_nueve','respuesta_diez','respuesta_once','respuesta_doce','respuesta_trece')->get();

        $data = Respuesta::select('correos.correo','respuestas.respuesta_uno','respuestas.respuesta_dos','respuestas.respuesta_tres','respuestas.respuesta_cuatro','respuestas.respuesta_cinco','respuestas.respuesta_seis','respuestas.respuesta_siete','respuestas.respuesta_ocho','respuestas.respuesta_nueve','respuestas.respuesta_diez','respuestas.respuesta_once','respuestas.respuesta_doce','respuestas.respuesta_trece')
                ->join('correos', 'respuestas.correo_id', '=', 'correos.id')
                ->get();

        return $data;
    }
}
