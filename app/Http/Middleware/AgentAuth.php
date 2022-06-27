<?php

namespace App\Http\Middleware;

use Closure;

class AgentAuth
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
        if (!auth('agent')->check()) {
            return redirect()->route('dashboard.login');
        }

        return $next($request);
    }
}
