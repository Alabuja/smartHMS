<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Nurse
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
        if(Auth::check() && Auth::user()->isRole() == "nurse"){
            return $next($request);
        }
        return redirect('login');
    }
}
