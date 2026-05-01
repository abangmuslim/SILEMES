<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerAuthUser extends Controller
{
    /*
    |--------------------------------------------------
    | SHOW LOGIN
    |--------------------------------------------------
    */
    public function showLogin()
    {
        return view('auth.login_user');
    }

    /*
    |--------------------------------------------------
    | LOGIN PROCESS
    |--------------------------------------------------
    */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {

            $user = Auth::guard('web')->user();

            // cek role → redirect sesuai dashboard
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            }

            if ($user->hasRole('staff')) {
                return redirect()->route('staff.dashboard');
            }

            if ($user->hasRole('teacher')) {
                return redirect()->route('teacher.dashboard');
            }

            // fallback
            return redirect()->route('landing.home');
        }

        return back()->with('error', 'Email atau password salah');
    }

    /*
    |--------------------------------------------------
    | LOGOUT
    |--------------------------------------------------
    */
    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect()->route('landing.home');
    }
}