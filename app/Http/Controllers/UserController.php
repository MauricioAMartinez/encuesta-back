<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function usuario(){

        return User::All();

    }

    public function validacionUsuario(Request $request){

        $usuario = User::where("email", "=", $request->usuario)->where("password","=",$request->password)->get()->toArray();    
       return $usuario;

    }
}
