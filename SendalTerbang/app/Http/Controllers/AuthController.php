<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $loginField = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $loginField => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin');
            }

            return redirect()->intended('/');
        }

        // Kirim pesan error ke view
        return back()->with('error', ' Username atau password salah!')->onlyInput('username');
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
