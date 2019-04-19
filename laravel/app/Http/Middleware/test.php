<?php

namespace App\Http\Middleware;

use Closure;

class test
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
        $ip=$request->ip();
        if($ip=='127.0.1.1')
        {
            throw new Exception("your ip is correct" );
            
        }
        return $next($request);
    }
}