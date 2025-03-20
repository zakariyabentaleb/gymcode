<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class MiddlewareAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role === 'admin'){
            return $next($request);
        }elseif(Auth::user()->role === 'Member'){
            return redirect()->route('clients.index');
        }
        return redirect()->route('developers.index');
    }
}
