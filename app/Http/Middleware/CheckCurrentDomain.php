<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckCurrentDomain
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
        $subDomain = explode('.',request()->getHost())[0];

        if (Auth::check() && in_array($subDomain,$request->user()->userDomains('domain'))) {
            return $next($request);
        }
        
        abort(404);
    }
}
