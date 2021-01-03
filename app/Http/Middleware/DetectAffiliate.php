<?php

namespace App\Http\Middleware;

use App\Events\AffiliateConfirmed;
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
        if ($request->query('via')) {
            if ($request->cookie("affiliate_id") != $request->query('via')){
                $response->withCookie(cookie()->forever('affiliate_id', $request->query('via')));
                event(new AffiliateConfirmed($request->query('via')));
            }
        }

        return $response;
    }
}
