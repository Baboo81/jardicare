<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

class ShareCookieConsent
{
    public function handle($request, Closure $next)
    {
        $cookie = Cookie::get('cookie_consent');
        $consent = [];
        if ($cookie) {
            $decoded = json_decode($cookie, true);
            $consent = is_array($decoded) ? $decoded : [];
        }
        // partagée partout
        view()->share('cookie_consent', $consent);

        return $next($request);
    }
}
