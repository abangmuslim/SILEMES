<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))

    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware): void {

        /*
        |--------------------------------------------------
        | REGISTER CUSTOM MIDDLEWARE
        |--------------------------------------------------
        */
        $middleware->alias([
            'user' => \App\Http\Middleware\UserMiddleware::class,
            'student' => \App\Http\Middleware\StudentMiddleware::class,
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions): void {

        // 404
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e, $request) {
            return response()->view('errors.404', [], 404);
        });

        // 403
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\HttpException $e, $request) {
            if ($e->getStatusCode() == 403) {
                return response()->view('errors.403', [], 403);
            }
        });

        // 500
        $exceptions->render(function (\Throwable $e, $request) {

            if (config('app.debug')) {
                return null; // tampilkan error asli Laravel
            }

            return response()->view('errors.500', [], 500);
        });
    })

    ->create();
