<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // \App\Http\Middleware\TrustProxies::class,
    \App\Http\Middleware\CorsMiddleware::class,
        \App\Http\Middleware\Cors::class,
        \Illuminate\Http\Middleware\HandleCors::class, // ← Asegurar que esta línea está presente
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    // ... resto del código
}