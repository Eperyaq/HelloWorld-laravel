<?php

use App\Http\Controllers\eventoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [eventoController::class,'eventos']);
Route::get('/alta', [eventoController::class,'showForm']);
Route::post('/alta', [eventoController::class,'altaForm']);