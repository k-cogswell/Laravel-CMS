<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EditorMiddleware {

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
            elseif(Auth::check() && $request->user()->permissions->keyBy('id')->has(2))
        {
            return $next($request);
        }

        $user = 'Editor';
        return view('errors.access_denied')->with('user', $user);
	}

}
