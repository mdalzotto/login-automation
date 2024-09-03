<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPermission
{

    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            return redirect()->route('home')->with('error', 'Você não tem permissão para acessar esta página.');
        }

        return $next($request);
    }
}
