<?php

namespace App\Http\Middleware;

use Closure;

class Counter
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

        return $next($request);

        //return $next($request);
        /*$response = $next($request);

        $value = $request->session()->get('counter', 1);
        //echo $value;

        $request->session()->put('counter', $value+1);

        return $response;*/

    }
}
