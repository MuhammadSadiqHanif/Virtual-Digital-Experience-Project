<?php

namespace App\Http\Middleware;

use App\SiteSetting;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsPrivateSite
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$site = SiteSetting::where('domain', $request->domain)->firstOrFail();

		if ($site->is_private == 1 && !Auth::check())
		{
			return redirect()->to('/login');
		}
		else
		{
			return $next($request);

		}
	}
}
