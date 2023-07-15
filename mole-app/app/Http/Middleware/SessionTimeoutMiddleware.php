<?php

namespace App\Http\Middleware;



use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SessionTimeoutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $this->checkSessionTimeout();

        return $next($request);
    }

    public function checkSessionTimeout()
    {
        if (Auth::check() && Session::has('lastActivity')) {
            $lastActivity = Session::get('lastActivity');
            $timeoutMinutes = config('session.lifetime');

            if (time() - $lastActivity > $timeoutMinutes * 30) {
                Auth::logout();
                Session::flush();
                return redirect('/')->with('warning', 'Your session has timed out. Please login again.');
            }
        }

        Session::put('lastActivity', time());
    }
}
