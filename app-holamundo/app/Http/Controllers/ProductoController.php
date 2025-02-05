<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function showProducto(){
        return view("productos");
    }

    public function comprarProducto(){
        return view('comprarproducto');
    }
}
