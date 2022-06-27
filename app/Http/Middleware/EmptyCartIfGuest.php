<?php

namespace App\Http\Middleware;

use Closure;

class EmptyCartIfGuest
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
        if (!auth('client')->check()) {
            session()->remove('cart');
        }
        return $next($request);
    }
}
