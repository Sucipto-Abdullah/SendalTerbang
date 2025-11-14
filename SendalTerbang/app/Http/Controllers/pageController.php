<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use App\Models\mahasiswa;
use App\Models\proyek;
use App\Models\kelompok;
use App\Models\gambarProyek;

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
    
    public function admin(){
        $page = 'admin';
        $mahasiswa = mahasiswa::all();
        $proyek = proyek::all();
        $proyek_ver = proyek::where("verifikasi", true)->get();
        return view("layouts/admin", compact("page", "mahasiswa", "proyek", "proyek_ver"));
    }

    public funciton kelolaAkun( $keyword = "" ){
        $page = "kelolaAkun";
        if($keyword == ""){
            $mahasiswa = mahasiswa::all();
            return view("layouts/admin", compact("mahasiswa"));
        }else{
            // $mahasiswa = 
        }
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
