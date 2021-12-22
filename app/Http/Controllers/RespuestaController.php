<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CorreosExport;
use App\Models\respuesta;
use App\Models\Correo;
use Illuminate\Support\Str;


class RespuestaController extends Controller
{
    //

    public function respuestaUsuario($correoId)
    {    
      $correo = respuesta::where('correo_id','=',$correoId)->get();
      return $correo;

    }

    public function exportExcel()
    {    
      return  Excel::download(new CorreosExport, 'correo.xlsx');
    }

    public function ingresarRespuesta(Request $request){

       $respuesta = new respuesta();
       $respuesta->respuesta_uno = $request->pregunta1;
       $respuesta->respuesta_dos = $request->pregunta2;
       $respuesta->respuesta_tres = $request->pregunta3;
       $respuesta->respuesta_cuatro = $request->pregunta4;
       $respuesta->respuesta_cinco = $request->pregunta5;
       $respuesta->respuesta_seis = $request->pregunta6;
       $respuesta->respuesta_siete = $request->pregunta7;
       $respuesta->respuesta_ocho = $request->pregunta8;
       $respuesta->respuesta_nueve = $request->pregunta9;
       $respuesta->respuesta_diez = $request->pregunta10;
       $respuesta->respuesta_once = $request->pregunta11;
       $respuesta->respuesta_doce = $request->pregunta12;
       $respuesta->respuesta_trece = $request->pregunta13;

       $correo = Correo::where('api_token','=',$request->api_token)->get();

       $respuesta->pregunta_id = 1;
       $respuesta->correo_id = $correo[0]->id;

        $correoNuevo = Correo::find($correo[0]->id);
        $correoNuevo->correo = $correo[0]->correo;
        $correoNuevo->api_token = Str::random(20);
        $correoNuevo->save();


       $respuesta->save();

    }

   

}
