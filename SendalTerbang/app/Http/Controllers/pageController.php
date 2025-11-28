<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use App\Models\mahasiswa;
use App\Models\proyek;
use App\Models\kelompok;
use App\Models\gambarProyek;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controller\Proyek;
use App\Models\Proyek;

class pageController extends Controller
{
    public function home()
    {
        if(session("user-role") === "admin"){
            Auth::logout();
        }
        $page = "home";
        return view("layouts/main", compact("page"));
    }

    public function expo()
    {
        if(session("user-role") === "admin"){
            Auth::logout();
        }
        $page = "expo";
        return view("layouts/main", compact("page"));
    }
    public function repository()
    {
        if(session("user-role") === "admin"){
            Auth::logout();
        }
        $page = "repository";
        return view("layouts/main", compact("page"));
    }
    public function about()
    {
        if(session("user-role") === "admin"){
            Auth::logout();
        }
        $page = "about";
        return view("layouts/main", compact("page"));
    }
    public function contact()
    {
        if(session("user-role") === "admin"){
            Auth::logout();
        }
        $page = "contact";
        return view("layouts/main", compact("page"));
    }

    public function project()
    {
        if(session("user-role") === "admin"){
            Auth::logout();
        }
        $page = "project";
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
