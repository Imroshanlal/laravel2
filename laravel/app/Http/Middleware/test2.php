<?php

namespace App\Http\Middleware;

use Closure;

class test2
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
        echo "this is second Middleware";
        echo "<br>";
        return $next($request);
    }
}
