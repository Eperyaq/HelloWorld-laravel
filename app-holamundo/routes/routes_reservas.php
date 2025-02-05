<?php

use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ReservaController::class,'getReservas']);
Route::post('/', [ReservaController::class,'insertarReserva']);
Route::put('/', [ReservaController::class,'actualizarReserva']);
Route::delete('/', [ReservaController::class,'deleteReserva']);