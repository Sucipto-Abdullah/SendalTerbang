<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $users = Auth::users(); // ambil data user yang sedang login
        return view('profile.index', compact('users'));
    }
}
