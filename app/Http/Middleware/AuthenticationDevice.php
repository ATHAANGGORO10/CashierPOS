<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationDevice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $agent = new Agent();

        $isMobile = $agent->isAndroidOS(NULL) || $agent->isiOS(NULL);
        $isTablet = $agent->isTablet(NULL);
        $isDesktop = $agent->isDesktop();

        if (!($isDesktop) || $isMobile || $isTablet) {
            return response()->view('auth.error');
        };

        return $next($request);
    }
}
