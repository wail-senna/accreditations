<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if(Auth::user()->role_as == 'admin')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status','you are not allowed to enter this page');
        }
        
    }
}
