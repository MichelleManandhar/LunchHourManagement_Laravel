<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Menu;

use Closure;

class EmployeeMiddleware
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
        if(Auth::user()->usertype=='employee')
        {
            return $next($request);
        }
        else{
            return redirect('/home')->with('status', 'You are not allowed to Admin dashboard ');
        }
    }
}
