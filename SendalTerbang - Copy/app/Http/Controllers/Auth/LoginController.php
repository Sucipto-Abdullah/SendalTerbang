<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logout()
    {
        Auth::logout(); // hapus sesi user login
        return redirect('/')->with('success', 'Anda telah logout.');
        
    }
    public function loginPost(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/'); // jika berhasil login
        }

        // kalau gagal login
        return back()->withErrors([
            'loginError' => 'Username atau password yang Anda masukkan salah!',
        ])->withInput();
    }

}
