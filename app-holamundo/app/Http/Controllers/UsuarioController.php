<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


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
        $user = User::find($id);

        return view('getusuario', compact('user'));
    }

    public function deleteByID($id){
        $user = User::find($id);

        if($user){
            $user->delete();
        }

       
        return view('borradousuario', compact('user'));
    
    }
}
