<?php

namespace App\Http\Middleware;

use Closure;

class VerifyApiHeaders
{

    const ACCEPT = 'application/json';

    const CONTENT_TYPE = 'application/json';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->header('Accept') != self::ACCEPT) {
            return response()->json([
                'header' => ['please set Accept header to application/json']
            ], 400, ['Accept' => self::ACCEPT]);
        }

        if ($request->header('Content-Type') != self::CONTENT_TYPE) {
            return response()->json([
                'header' => ['please set Content-Type header to application/json']
            ], 400, ['Content-Type' => self::CONTENT_TYPE]);
        }

        return $next($request);
    }
}
