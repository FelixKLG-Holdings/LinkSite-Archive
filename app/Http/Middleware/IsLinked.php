<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsLinked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->user()->discord_id) {
            return redirect()->route('auth.steam');
        }
        return $next($request);
    }
}
