<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isRecoder
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
        if (Auth::check()) {
            if(auth()->User()->isActive()) {
                if (auth()->User()->isRecoder()) {
                    return $next($request);
                }
            }else{
                return redirect()->intended('/blocked');
            }
        }
        return redirect()->intended('/login');
    }
}
