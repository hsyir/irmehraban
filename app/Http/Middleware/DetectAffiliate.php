<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

        Log::info("cookie",$request->cookies->all());

        if ($request->query('via')) {
            $response->withCookie(cookie()->forever('affiliate_id', $request->query('via')));
        }

        return $response;
    }
}
