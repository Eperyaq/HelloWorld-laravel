<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function showIndex(){
        return view("usuarios");
    }

    public function register(Request $request ){
        
        $datosUsuario= $request->all(); //Obtiene todos los datos del body 
        return view('altausuario', compact('datosUsuario'));
    }

    public function getById($id){
        return view('getusuario', compact('id'));
    }

    
}
