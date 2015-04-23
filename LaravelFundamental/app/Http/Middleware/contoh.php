<?php namespace App\Http\Middleware;

use Closure;

class contoh {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if($request->is('artikel/create')&& $request->has('foo')){
            return redirect('artikel');
        }
        return $next($request);
	}

}
