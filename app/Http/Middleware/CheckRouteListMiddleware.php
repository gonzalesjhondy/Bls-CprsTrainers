<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRouteListMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $allowedRoutes = [
            'Home',
            'trainer.index',
            'trainer.muncity',
            'trainer.add'
        ];
        if (!in_array($request->route()->getName(), $allowedRoutes)) {
            // Redirect or handle unauthorized access
            return redirect()->route('unauthorized');
        }
        
        return $next($request);
    }
}
