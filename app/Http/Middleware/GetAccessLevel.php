<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GetAccessLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, int $minRequiredRole): Response
    {
        if (auth()->check() && auth()->user()->role >= $minRequiredRole) {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
