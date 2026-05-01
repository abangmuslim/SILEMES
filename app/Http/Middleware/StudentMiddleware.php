<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $student = Auth::guard('student')->user();

        /*
        |--------------------------------------------------
        | NOT LOGIN
        |--------------------------------------------------
        */
        if (!$student) {
            return redirect()->route('student.login')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        /*
        |--------------------------------------------------
        | STATUS CHECK
        |--------------------------------------------------
        */
        if ($student->status !== 'active') {

            Auth::guard('student')->logout();

            return redirect()->route('student.login')
                ->with('error', 'Akun Anda tidak aktif');
        }

        return $next($request);
    }
}