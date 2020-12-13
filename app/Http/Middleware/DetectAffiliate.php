<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DetectAffiliate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $response = $next($request);

        if ($request->query('via')) {
            $response->withCookie(cookie()->forever('affiliate', $request->query('via')));
        }

        return $response;
    }
}
