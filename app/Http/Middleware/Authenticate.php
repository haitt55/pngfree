<?php

namespace App\Http\Middleware;

use Closure;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = null;
        if (auth()->check() || auth()->viaRemember()) {
            $user = auth()->user();
        }
        view()->share('userLoggedIn', $user);
        return $next($request);
    }
}
