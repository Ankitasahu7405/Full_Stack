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
       
		//$middleware->append(customer_before::class);
		//$middleware->append(customer_after::class);
		
		
		//$middleware->alias(['customer_before' => \App\Http\Middleware\customer_before::class,]);
		//$middleware->alias(['customer_after' => \App\Http\Middleware\customer_after::class,]);
		//$middleware->alias(['admin_before' => \App\Http\Middleware\admin_before::class,]);
		//$middleware->alias(['admin_after' => \App\Http\Middleware\admin_after::class,]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
