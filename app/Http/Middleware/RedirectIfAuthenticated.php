<?php

namespace App\Http\Middleware;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
   /* public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/noti_manage');
        }

        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }*/
   /* public function handle( $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }*/
    public function handle( $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            $hostname = $request->getHttpHost();
            if ($hostname == "sutto_management.test" && Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }elseif ($hostname == "app.sutto_management.test" && Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::ARTICLEMANAGE);
            }
        }

        return $next($request);
    }
}
