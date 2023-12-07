<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class addCustomHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        // $response->header('ngrok-skip-browser-warning', "69420");
        // $response->header("ngrok-skip-browser-warning" , "69420");
        $request->headers->set('ngrok-skip-browser-warning', '1231');
        // $response->header('UserAgent', 'MyAppName/1.0.0');
        //  dd($response);
        return $response;
    }
}
