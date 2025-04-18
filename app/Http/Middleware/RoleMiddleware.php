<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // verifaction si l'utilisateur est connecté
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        // verifaction si l'utilisateur a le role
        if (!auth()->user()->roles()->where('nom', $role)->exists()) {
            abort(403, 'Accès refusé');
        }

        return $next($request);
    }
}
