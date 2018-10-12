<?php

namespace Elegant\Admin\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class Authenticate
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
        $this->authenticate($request);

        return $next($request);
    }

    /**
     * Determine if the user is logged in.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function authenticate($request)
    {
        $guard = config('app.auth.guard');

        if (Auth::guard($guard)->check()) {
            return Auth::shouldUse($guard);
        }

        throw new AuthenticationException(
            'Unauthenticated.', [$guard], route('admin.login')
        );
    }
}
