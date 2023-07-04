<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $res = $next($request);
        $res->headers->set("Access-Control-Allow-Origin", "*");
        $res->headers->set("Access-Control-Allow-Methods", "POST, GET, PUT, DELETE, OPTIONS");
        $res->headers->set("Access-Control-Allow-Headers", "Content-Type, Authorization");

        return $res;
    }
}
