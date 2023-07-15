<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class ChefMiddleware
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
        if(Auth::user()->usertype=='chef')
        {
            return $next($request);
        }
        else{
            return redirect('/menu')->with('status', 'You are not allowed to Admin dashboard ');
        }
        
    }
}
