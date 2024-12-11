<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckQueryParameter
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('access_key') || $request->session()->get('access_key') !== '123') {
            // Allow access only if query parameter is present and valid
            if ($request->query('key') !== '123') {
                // Check if it's an AJAX request
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json(['error' => 'Invalid key'], 403);
                }

                // Deny access for direct page load
                return response()->view('frontend.modify-services', ['showModal' => true], 403);
            }

            // Store the key in the session for subsequent requests
            $request->session()->put('access_key', '123');
        }

        return $next($request);
    }
}
