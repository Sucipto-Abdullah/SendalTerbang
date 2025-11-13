<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyek;
use App\Models\kelompok;
use App\Models\mahasiswa;
use App\Models\gambarProyek;

class proyekController extends Controller
{
    public static function getProyekByKeyWord( string $keyword){
        $array = proyek::where("judul", "like", "%".(string)$keyword."%")->get();
        return $array;
    }

    public static function getProyekById( int $id ){
        $array = proyek::where("id", (string)$id)->get();
        $Arr_img = gambarProyek::where("proyek", $id)->get();
        $img_location = array();
        
        foreach($Arr_img as $img){
            $img_loc = $img["lokasi"];
            array_push($img_location, $img_loc);
        }

    }

    public static function getProyekByMahasiswaId( int $id ){
        $kelompok = kelompok::where("mahasiswa", $id)->get();
        $proyek = array();
        foreach($kelompok as $kel){
            $idProyek = $kel["proyek"];
            $getProyek = proyek::where("id", $idProyek)->get();
            array_push($proyek, $getProyek[0]);
        }
        return $proyek;
    }
}
