<?php

namespace App\Http\Middleware;

use Closure;

class TestCheck
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
        dd('dashgfda');

        return $next($request);
    }
}
