<?php

namespace App\Http\Middleware;

use Closure;

class Currency
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
//        $raw_currency = $request->session()->get('currency');
//        if (in_array($raw_currency, currencies())) {
//            $currency = $raw_currency;
//        }
//        else $currency = config()->get('app.currency');
//        session(['currency' => $currency]);
        return $next($request);
    }
}
