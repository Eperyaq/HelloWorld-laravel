<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductoController::class,'showProducto']);
Route::get('/comprarproductos', [ProductoController::class,'comprarProducto']);