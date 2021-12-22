<?php

namespace App\Http\Controllers;

use App\Models\Correo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\EncuestasMailable;

class CorreoController extends Controller
{
    //

    public function listarCorreos()
    {

        $correo = Correo::all();

        return $correo;
    }

    public function agregarCorreo(Request $request)
    {


        $correo = new Correo();
        $correo->correo = $request->correo;
        $correo->api_token = Str::random(20);
        $correo->save();

        session()->flash('correo',  $correo->correo);
        session()->flash('api_token',  $correo->api_token);

        $funcion = self::enviarCorreo();
    }

    public function eliminarCorreo($id)
    {
        $correo =  Correo::find($id);
        $correo->delete();
    }


    public function reenviarEncuesta($id)
    {

        $correo = Correo::find($id);
        $correo->api_token = Str::random(20);
        $correo->save();

        session()->flash('correo',  $correo->correo);
        session()->flash('api_token',  $correo->api_token);

        $funcion = self::enviarCorreo();
    }

    public function enviarCorreo()
    {
        $correo = session('correo');
        $plantilla = new EncuestasMailable;
        Mail::to($correo)->send($plantilla);
        return '1';
    }

    public function accesoEncuesta(Request $request){

        $correo = Correo::where("correo",'=',$request->correo)->where("api_token","=",$request->api_token)->get()->toArray();
      
        if (empty($correo)) {
           return false;
        }else{
            return true;
        }
        
    }
}
