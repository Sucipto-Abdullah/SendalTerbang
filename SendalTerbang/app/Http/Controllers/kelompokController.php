<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelompok;
use App\Models\proyek;
use App\Models\mahasiswa;

class kelompokController extends Controller
{
    public static function getKelompokFromProyek(int $id_proyek){
        $kelompok = kelompok::where("proyek", $id_proyek)->get();
        $mahasiswa = array();
        foreach( $kelompok as $anggota ){
            $id = $anggota['mahasiswa'];
            $mhs = mahasiswa::where("id", $id)->get();
            array_push($mahasiswa, $mhs[0]);
            // echo $mhs;
        }
        return $mahasiswa;
    }

    public static function getProyekFromMahasiswa(int $id_mahasiswa){
        $kelompok = kelompok::where("mahasiswa", $id_mahasiswa)->get();
        // echo $kelompok."<br>";
        $proyek = array();
        foreach($kelompok as $kel){
            $idProyek = $kel["proyek"];
            $getProyek = proyek::where("id", $idProyek)->get();
            array_push($proyek, $getProyek[0]);
        }
        return $proyek;
    }
}
