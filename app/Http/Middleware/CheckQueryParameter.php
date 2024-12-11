<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckQueryParameter
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->query('key') !== '123') {
            return response()->json(['error' => 'Invalid key'], 403);
        }

        return $next($request);
    }
}
