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
        $localeKey = config('app.localesKey', ['ar', 'en']);

        if ($request->has('lang')) {
            $validatedData = $request->validate([
                'lang' => 'string|max:2|in:' . implode(',', $localeKey)
            ]);
            session(['LOCALELANG' => $validatedData['lang']]);
        }

        $locale = session('LOCALELANG', app()->getLocale());
        App::setLocale($locale);

        return $next($request);
    }
}
