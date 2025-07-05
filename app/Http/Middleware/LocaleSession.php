<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class LocaleSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $availableLocales = ['en', 'ar'];

        if ($request->has('lang') && in_array($request->query('lang'), $availableLocales)) {
            session(['locale' => $request->query('lang')]);
        }

        // Set locale from session if exists, otherwise default locale
        App::setLocale(session('locale', config('app.locale')));

        return $next($request);
    }
}
