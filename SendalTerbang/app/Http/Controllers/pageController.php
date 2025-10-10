<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
