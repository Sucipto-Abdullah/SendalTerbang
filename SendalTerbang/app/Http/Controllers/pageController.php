<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Facades\Auth;

class pageController extends Controller
{
    public function home()
    {
        $page = "home";
        return view("layouts/main", compact("page"));
    }

    public function expo()
    {
        $page = "expo";
        return view("layouts/main", compact("page"));
    }
    public function repository()
    {
        $page = "repository";
        return view("layouts/main", compact("page"));
    }
    public function about()
    {
        $page = "about";
        return view("layouts/main", compact("page"));
    }
    public function contact()
    {
        $page = "contact";
        return view("layouts/main", compact("page"));
    }

    public function project()
    {
        $page = "project";
        return view("layouts/main", compact("page"));
    }
    
    public function admin( ){
        $page = 'admin';
        return view("layouts/admin", compact("page"));
    }
    public function userProyek( ){
        $page = 'userProyek';
        return view("layouts/main", compact("page"));
    }

    public function login()
    {
        $page = "login";
        return view("page/login", compact("page"));
    }
    public function profile()
    {
        
        $user = Auth::user(); // ambil data user yang sedang login
        $page = "profile";
        return view("layouts/main", compact("page"));
    }
    
        public function search(Request $request)
    {
        $query = $request->input('q');

        // Jika kosong, arahkan kembali ke index
        if (!$query) {
            return redirect()->route('repository.index');
        }

        $projects = Project::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->paginate(9)
            ->withQueryString();

        return view('repository.index', compact('projects', 'query'));
    }
}
