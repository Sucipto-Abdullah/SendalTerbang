<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use App\Http\Controllers\kelompokController;
use App\Http\Controllers\proyekController;
use App\Http\Controllers\sosialMediaController;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public static function getMahasiswaFromKeyword($keyword){
        $array_result = [];
        $array_nim = mahasiswa::where("nim", "like", "%".(string)$keyword."%")->get();
        $array_nama = mahasiswa::where("nama", "like", "%".(string)$keyword."%")->get();
        
        foreach($array_nim as $nim){
            if( !in_array($nim, $array_result) ){
                array_push($array_result, $nim);
            }
        }
        foreach($array_nama as $nama){
            if( !in_array($nama, $array_result)){
                array_push($array_result, $nama);
            }
        }
        return $array_result;
    }
    
    public static function getMahasiswaById( int $id ){
        $array = mahasiswa::where("id", (string)$id)->get()->first();
        $proyekContrib = kelompokController::getProyekFromMahasiswa($id);
        $sosialMedia = sosialMediaController::getSosialMediaByIdMahasiswa($id);

        $array["proyek"] = $proyekContrib;
        $array["sosial_media"] = $sosialMedia;
        return $array;
    }

}
