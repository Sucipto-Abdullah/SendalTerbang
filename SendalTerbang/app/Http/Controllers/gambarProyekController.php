<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class gambarProyekController extends Controller
{
    public static function getMahasiswaFromKeyword($keyword){
        $array_result = array();
        $array_nim = mahasiswa::where("nim", "like", "%".(string)$keyword."%")->get();
        $array_nama = mahasiswa::where("nama", "like", "%".(string)$keyword."%")->get();
        echo $array_nama; 
    }
}
