<?php

namespace app\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if(Auth::check()) {
        if(Auth::user()->type_user === 'admin') {
            return $next($request);
        }

        else {
            Session::flush();
            return redirect('/login');
        }

       }
         else {
              return redirect('/login');
         }

    }
}
