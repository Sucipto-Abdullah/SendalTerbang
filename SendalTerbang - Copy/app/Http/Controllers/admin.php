<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function admin( ){
        
        $part = 'dashboard';
        return view("layouts/admin", compact("part"));
    }
    public function kelolaAkun( ){

        $part = 'kelola akun';
        return view("layouts/admin", compact("part"));
    }

    public function kelolaProyek( ){

        $part = 'kelola proyek';
        return view("layouts/admin", compact("part"));
    }
    public function vertifikasi( ){

        $part = 'vertifikasi';
        return view("layouts/admin", compact("part"));
    }
    public function kelolaDanPenilaian( ){

        $part = 'kelolaDanPenilaian';
        return view("layouts/admin", compact("part"));
    }
}
