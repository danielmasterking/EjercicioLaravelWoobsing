<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function crearUsuario (Request $request) {
        
        $nombre = $request->post("nombre");
        $apellido = $request->post("apellido");
        $correo = $request->post("correo");
        $telefono = $request->post("telefono");

        $model = new Usuario;


        $model->nombre =  $nombre;
        $model->apellido =  $apellido;
        $model->correo =  $correo;
        $model->telefono =  $telefono;
        if($model->save()){
            $code = 200;
        }else {
            $code = 500;
        }

        return response()->json([
            'code' => $code
        ]);
    }
}
