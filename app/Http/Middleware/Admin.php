<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->isSuperadmin() || Auth::user()->isSurveyor() || Auth::user()->isSupervisor() || Auth::user()->isPimpinan()) {
                return $next($request);
            } else {
                return redirect()->route('user');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
