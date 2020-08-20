<?php

namespace App\Http\Middleware;

use Closure;

class superAdminMiddleware
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
        if(  auth()->user()->typeAccount == 'admin'){

            return $next($request);

        }
        return redirect('/');
    }
}
