<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class APIChecks
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $apiKey = config('services.leysup.api_phrase');

        if (!$request->hasHeader('Key')) {
            abort(401, 'Unauthorized');
        } else if ($token = $request->header('key')) {
            if ($token != $apiKey) {
                abort(403, 'Access Denied');
            } else {
                return $next($request);
            }
        }
    }
}
