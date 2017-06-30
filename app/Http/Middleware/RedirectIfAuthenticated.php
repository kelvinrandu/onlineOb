<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
        //  case 'detective':
          //  if (Auth::guard($guard)->check()&& $admin->is_detective() ) {
            // return redirect()->route('detective.dashboard'); /* tests against the admin guard */
           //}
//break;

          case 'admin':
           if (Auth::guard($guard)->check()) {
             return redirect()->route('detective.dashboard'); /* tests against the admin guard */
           }
           break;


          default:
          if (Auth::guard($guard)->check()) {
              return redirect('/home');   /* tests against the user guard */
          }
            break;
        }


        return $next($request);
    }
}
