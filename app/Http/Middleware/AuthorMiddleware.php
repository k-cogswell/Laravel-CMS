<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthorMiddleware {



    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if (!Auth::check())
        {
            return redirect('auth/login');
        }else if(Auth::check() && !$request->user()->permissions->keyBy('id')->has(3))
        {
            return "You are not authorized.";
        }
        elseif(Auth::check() && $request->user()->permissions->keyBy('id')->has(3))
        {
            return $next($request);
        }

    }

}