<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Cookie;

class CheckReferral
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
        if( !$request->hasCookie('referral') && $request->query('ref') ) {
            return redirect($request->url())->withCookie(cookie()
            ->make('referral', $request->query('ref'), 5000));
        }

        return $next($request);
    }
}
