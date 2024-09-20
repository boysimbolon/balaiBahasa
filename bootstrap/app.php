<?php

use App\Http\Middleware\EnsureAdmin;
use App\Http\Middleware\EnsureMahasiswa;
use App\Http\Middleware\EnsureUser;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'mhs' => EnsureMahasiswa::class,
            'user' => EnsureUser::class,
            'admins' =>EnsureAdmin::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
