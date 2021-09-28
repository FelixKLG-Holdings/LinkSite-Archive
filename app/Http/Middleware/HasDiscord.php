<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HasDiscord
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
        if($request->user()->discord_id) {
            return redirect()->route('linked')->with('error', 'Your Discord Account is already linked to a Steam Account.');
        }
        return $next($request);
    }
}
