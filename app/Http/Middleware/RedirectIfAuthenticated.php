<?php

namespace App\Http\Middleware;

use Closure;
use App\liveCMS\Models\GenericSetting as Setting;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::guard($guard)->user();
            $site = $user->site ?: site();
            $root = $site->getRootUrl();
            $adminSlug  = config('livecms.slugs.admin');
            $setting = $site->settings()->where('key', 'slug_admin')->first();
            
            if ($setting) {
                $adminSlug = $setting->value;
            }

            $url = $root.'/'.$adminSlug;
            return redirect()->away($url);
        }

        return $next($request);
    }
}
