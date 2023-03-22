<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class CorsMiddleware
{
    public function handle($request, Closure $next)
{
    $response = $next($request);
    $response->header('Access-Control-Allow-Origin', 'https://jmfg.webdesignworkx.com');
    $response->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    $response->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');

    return $response;
}

}
