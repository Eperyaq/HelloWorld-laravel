<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UsuarioController::class,'showIndex']);
Route::get('/alta', [UsuarioController::class,'register']);
Route::get("/get/{id}", [UsuarioController::class,'getById']);