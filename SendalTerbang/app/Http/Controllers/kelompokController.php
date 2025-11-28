<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelompok;
use App\Models\proyek;
use App\Models\mahasiswa;
use App\Http\Controllers\mahasiswaController;

class kelompokController extends Controller
{
    public static function getKelompokFromProyek(int $id_proyek){
        $kelompok = kelompok::where("proyek", $id_proyek)->get();
        $mahasiswa = array();
        foreach( $kelompok as $anggota ){
            $id = $anggota['mahasiswa'];
            $mhs = mahasiswaController::getMahasiswaById($id);
            array_push($mahasiswa, $mhs);
        }
        return $mahasiswa;
    }

    public static function getProyekFromMahasiswa(int $id_mahasiswa){
        $kelompok = kelompok::where("mahasiswa", $id_mahasiswa)->get();
        $proyek = array();
        foreach($kelompok as $kel){
            $idProyek = $kel["proyek"];
            $getProyek = proyek::where("id", (string)$idProyek)->get()->first();
            array_push($proyek, $getProyek);
        }
        return $proyek;
    }

    public static function addKelompok( int $proyekId, array $mahasiswa_array){
        for($mahasiswa_array as $anggota){
            $anggotaData = [
                "mahasiswa" => $anggota["id"],
                "proyek" => $proyekId
            ];
            kelompok::create($anggotaData);
        }
    }

}
