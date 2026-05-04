<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UserMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::guard('web')->user();

        /*
        |--------------------------------------------------
        | NOT LOGIN
        |--------------------------------------------------
        */
        if (!$user) {
            return redirect()->route('landing.home');
        }

        /*
        |--------------------------------------------------
        | ROLE CHECK (AUTHORIZATION)
        |--------------------------------------------------
        */
        if (!empty($roles) && !$user->hasAnyRole($roles)) {
            abort(403);
        }

        /*
        |--------------------------------------------------
        | THEME COLOR (PRESENTATION)
        |--------------------------------------------------
        */
        $themeColor = 'primary'; // default

        if ($user->hasRole('admin')) {
            $themeColor = 'danger';
        } elseif ($user->hasRole('staff')) {
            $themeColor = 'warning';
        } elseif ($user->hasRole('teacher')) {
            $themeColor = 'success';
        }

        View::share('themeColor', $themeColor);

        return $next($request);
    }
}