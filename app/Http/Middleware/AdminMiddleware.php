<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware {



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
        }
        elseif(Auth::check() && $request->user()->permissions->keyBy('id')->has(1))
        {
            return $next($request);
        }

        $user = 'Admin';
        return view('errors.access_denied')->with('user', $user);
	}

}
