<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::prefix('usuarios')->group(base_path('routes/routes_usuarios.php'));
            Route::prefix('productos')->group(base_path('routes/routes_producto.php'));
            Route::prefix('/')->group(base_path('routes/web.php'));
            Route::prefix('/reservas')->group(base_path('routes/routes_reservas.php'));
            Route::prefix('/eventos')->group(base_path('routes/routes_evento.php'));
        
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
