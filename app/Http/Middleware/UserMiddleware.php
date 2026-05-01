<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::guard('web')->user();

        // belum login
        if (!$user) {
            return redirect()->route('landing.home');
        }

        /*
        |--------------------------------------------------
        | ROLE CHECK
        |--------------------------------------------------
        */
        if (!empty($roles)) {

            if (!$user->hasAnyRole($roles)) {
                abort(403);
            }

        }

        return $next($request);
    }
}