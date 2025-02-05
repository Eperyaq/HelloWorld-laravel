<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function getReservas(){
        return view("allreservas");
    }

    public function insertarReserva(){
        return view('insertreserva');
    }
    public function deleteReserva(){
        return view("deletereserva");
    }

    public function actualizarReserva(){
        return view('putreserva');
    }
}
