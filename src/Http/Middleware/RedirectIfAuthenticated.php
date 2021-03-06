<?php

namespace Elegant\Admin\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        if (Auth::guard(config('admin.auth.guard'))->check()) {
            return redirect()->route('admin.dashboard');
        }
        
        return $next($request);
    }
}
