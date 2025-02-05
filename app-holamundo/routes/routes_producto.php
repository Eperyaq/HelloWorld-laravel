<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('productos');
});
Route::get('/comprarproductos', function () {
    return view('comprarproducto');
});