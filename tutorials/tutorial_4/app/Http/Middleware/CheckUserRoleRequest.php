<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRoleRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role, string $foo): Response
    {
        // dd($foo);
        $isAuthenticated = Auth::check();

        if (false === $isAuthenticated) {
            return redirect('/login');
        }

        $user = $request->user();

        if (null === $user) {
            return redirect('/login');
        }

        $roles = explode('|', $role);

        if (false === in_array($user->role()->first()->name, $roles)) {
            return abort(403, 'Forbidden');
        }

        return $next($request);
    }
}
