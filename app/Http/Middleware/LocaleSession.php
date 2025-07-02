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
        $localeKey = config('app.localesKey');

        // If `lang` query parameter is present, validate and update the session
        if ($request->has('lang')) {
            $validatedData = $request->validate([
                'lang' => 'string|max:2|in:' . implode(',', $localeKey)
            ]);

            // Store the locale in the session
            session(['LOCALELANG' => $validatedData['lang']]);
        }

        // Get the current locale from the session or default to app's locale
        $locale = session('LOCALELANG', app()->getLocale());

        // Set the application locale
        App::setLocale($locale);

        return $next($request);
    }
}
