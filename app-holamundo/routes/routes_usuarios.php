<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('usuarios');
});
Route::get('/alta', function () {
    return view('altausuario');
});