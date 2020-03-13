<?php

namespace App\Http\Middleware;

use Closure;

class member
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
        if (Auth::user()->user_type !== 1
            || Auth::user()->user_type !== 2) {
                return redirect()->back()->with('error', 'Permission Denied');
            }
        return $next($request);
    }
}