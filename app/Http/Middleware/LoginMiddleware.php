<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class LoginMiddleware
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
        if(Auth::check())
        {
            
            if(Auth::user()->id!=1)
            {
               var_dump(Auth::user()->id);
                 return redirect()->intended('index');
            }
        }
        return $next($request);
    }
}
