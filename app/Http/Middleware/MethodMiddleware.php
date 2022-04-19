<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Arr;

class MethodMiddleware
{
    const METHOD_ALLOWED = ['GET', 'POST'];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (in_array($request->getMethod(), self::METHOD_ALLOWED)) {
            return response(['message' => 'Method Not Allowed', 'code' => 405], 405);
        }
        
        return $next($request);
    }
}
