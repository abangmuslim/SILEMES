<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerAuthStudent extends Controller
{
    /*
    |--------------------------------------------------
    | SHOW LOGIN
    |--------------------------------------------------
    */
    public function showLogin()
    {
        return view('auth.login_student');
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

        if (Auth::guard('student')->attempt($credentials)) {

            return redirect()->route('student.dashboard');
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
        Auth::guard('student')->logout();

        return redirect()->route('landing.home');
    }
}