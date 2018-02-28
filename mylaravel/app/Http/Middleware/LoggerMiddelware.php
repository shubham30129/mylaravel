<?php

namespace App\Http\Middleware;

use Closure;
use Log;
class LoggerMiddelware
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
        Log::info("Log Entry from LoggerMiddelWare");
        return $next($request);
    }
}
