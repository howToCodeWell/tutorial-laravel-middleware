<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $firstName = $request->input('name');

        if (null !== $firstName) {
            $request->merge(['first_name' => $firstName]);
            $request->offsetUnset('name');
        }
        return $next($request);
    }
}
