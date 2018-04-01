<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfNotPatient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'patient')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('patient/login');
        }
        return $next($request);
    }
}
