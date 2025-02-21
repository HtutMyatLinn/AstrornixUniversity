<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role_id != 1) {
            return response()->json(['message' => 'Unauthorized'], 401);
        } elseif (Auth::user()->role_id != 2) {
            return response()->json(['message' => 'Unauthorized'], 401);
        } elseif (Auth::user()->role_id != 3) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        return $next($request);
    }
}
