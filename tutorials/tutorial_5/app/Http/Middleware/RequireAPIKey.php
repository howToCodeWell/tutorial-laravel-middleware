<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class RequireAPIKey
{
    public const SECRET = 'HTCW';

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): JsonResponse
    {
        $key = $request->header('x-secret-key');

        if ($key !== self::SECRET) {
            return Response()->json(['message' =>'Requires key'], 401);
        }
    
        return $next($request);
    }
}
