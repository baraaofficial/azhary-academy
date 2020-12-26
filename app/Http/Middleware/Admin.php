<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{

	public function handle($request, Closure $next)
	{
		if (auth()->guest()){
			return redirect('/register');
		}

		if (auth()->user()->is_admin != 'admin'){
			return redirect('/');
		}

		return $next($request);
	}
}
