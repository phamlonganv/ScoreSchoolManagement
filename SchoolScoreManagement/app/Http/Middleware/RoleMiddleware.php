<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$obligatoryRole)
    {
        $currentRole = Auth()->user()->role->name;
        if($currentRole == $obligatoryRole)
        {

            return $next($request);
        }
        else
        {
            return redirect('/users');
        }

    }
}
