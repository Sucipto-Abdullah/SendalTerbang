<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

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
}
