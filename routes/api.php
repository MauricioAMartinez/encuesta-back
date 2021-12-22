<?php

use App\Http\Controllers\CorreoController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [UserController::class,'validacionUsuario']);

Route::get('/listarCorreo', [CorreoController::class,'listarCorreos']);
Route::post('/agregarCorreo', [CorreoController::class,'agregarCorreo']);
Route::delete('/eliminarCorreo/{id}', [CorreoController::class,'eliminarCorreo']);
Route::get('/reenviarEncuesta/{id}', [CorreoController::class,'reenviarEncuesta']);
Route::post('/acceso',[CorreoController::class,'accesoEncuesta']);

Route::get('/exportExcel', [RespuestaController::class,'exportExcel']);
Route::get('/respuestaUsuario/{correoId}', [RespuestaController::class,'respuestaUsuario']);
Route::post('/respuesta',[RespuestaController::class,'ingresarRespuesta']);





