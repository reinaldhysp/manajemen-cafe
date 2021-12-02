<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isCasir
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->check() || auth()->user()->role !== 'casir'){
            abort(403);
        }

        return $next($request);
    }
}
