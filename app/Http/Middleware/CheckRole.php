<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if ($request->user()->role != $role) {
            return redirect('/countries')->with('message', 'you are not admin, Access is denied');
        }

        return $next($request);
    }
}
