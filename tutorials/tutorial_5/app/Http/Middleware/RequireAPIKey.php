<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequireAPIKey
{
    public const SECRET = 'HTCW';

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = $request->header('x-secret-key');

        if ($key !== self::SECRET) {
            return Response()->json(['message'=> 'Requires Key'], 401);
        }

        return $next($request);
    }
}
