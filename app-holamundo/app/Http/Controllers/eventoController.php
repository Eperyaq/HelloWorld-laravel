<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventoController extends Controller
{
    public function eventos(){
        return view("eventindex");
    }

    public function altaForm(Request $request ){
        
        $datosEvento= $request->all(); //Obtiene todos los datos del body 
        return view('eventinsert', compact('datosEvento'));
    }

    public function showForm(){
        return view('eventForm');
    }
}
