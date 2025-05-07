<?php

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
            'admin' => \App\Http\Middleware\AdminMiddlware::class,
            'client' => \App\Http\Middleware\MemberMiddleware::class,
            'trainer' => \App\Http\Middleware\trainerMiddleware::class,
        ]);
        $middleware->redirectUsersTo(fn ($user) => match ($user->role) {
            'admin' => 'admin-dashboard',
            'member' => 'clients.index',
            'trainer' => 'trainer-dashboard',
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();