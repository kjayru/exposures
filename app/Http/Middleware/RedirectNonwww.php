<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RedirectNonwww
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
       
        $host = $request->header('host');
        if (Str::startsWith($host, 'www.')){
            $redirectHost = str_replace('www.', '', $host);
            $request->headers->set('host', $redirectHost);
            $redirect = new RedirectResponse($request->fullUrl(), 301);
            return $redirect;
        }
        return $next($request);
    }
}
