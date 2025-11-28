<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\mahasiswaController;

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
            session(["user-role" => $user->role]);
            session(["login" => true]); 

            if ($user->role === 'admin') {
                return redirect("/admin");
            }
            if ( $user->role === 'mahasiswa' ){
                $mahasiswa = mahasiswaController::getMahasiswaFromUserId($user->id);
                session(["account" => $mahasiswa]);
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

    public function createMhsAcc(){
        $page = "home";
        return view("layouts/main", compact("page"));
    }
}
