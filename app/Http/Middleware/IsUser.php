<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsUser
{
    public function handle(Request $request, Closure $next)
    {
		$user = Auth::user();

		if (!$user || $user->user_type !== "user") {
			abort(403, 'Unauthorized access.');
		}
		return $next($request);
    }
}
