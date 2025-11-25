<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use App\Models\Users;
use App\Http\Controllers\kelompokController;
use App\Http\Controllers\proyekController;
use App\Http\Controllers\sosialMediaController;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{

    public static function getAllMahasiswa(){
        $mahasiswa_List_result = [];

        $mahasiswa_array = mahasiswa::all();

        foreach($mahasiswa_array as $mhs){
            if($mhs["userID"] != 0){
                $mahasiswaID = $mhs["id"];
                $mahasiswa = self::getMahasiswaById($mahasiswaID);
                array_push($mahasiswa_List_result, $mahasiswa);
            }
        }
        
        return $mahasiswa_List_result;
    }

    public static function getMahasiswaListFromKeyword($keyword){
        $mahasiswa_List_result = [];
        $mahasiswa_list_id = [];

        $array_nim = Users::where("kode", "like", "%".(string)$keyword."%")->get();
        $array_nama = Users::where("username", "like", "%".(string)$keyword."%")->get();
        
        foreach($array_nim as $index){
            $mahasiswaID = $index["id"];
            if( !in_array($mahasiswaID, $mahasiswa_list_id) && $index["role"] == "mahasiswa" ){
                array_push($mahasiswa_list_id, $mahasiswaID);
            }
        }
        foreach($array_nama as $index){
            $mahasiswaID = $index["id"];
            if( !in_array($mahasiswaID, $mahasiswa_list_id) && $index["role"] == "mahasiswa" ){
                array_push($mahasiswa_list_id, $mahasiswaID);
            }
        }

        foreach( $mahasiswa_list_id as $id){
            $mahasiswa = self::getMahasiswaById($id);
            array_push($mahasiswa_List_result, $mahasiswa);
        }

        return $mahasiswa_List_result;
    }
    
    public static function getMahasiswaById( int $id ){

        $mahasiswa = array(
            "id" => 0,
            "nama" => "",
            "nim" => "",
            "kelas" => "",
            "email" => "",
            "angkatan" => "",
            "sosial-media" => array(),
            "proyek" => array()
        );

        $array = mahasiswa::where("id", (string)$id)->get()->first();
        $user = Users::where("id", $array["userID"])->get()[0];

        $mahasiswa["id"] = $array["id"];
        $mahasiswa["nama"] = $user["username"];
        $mahasiswa["nim"] = $user["kode"];
        $mahasiswa["kelas"] = $array["kelas"];
        $mahasiswa["email"] = $user["email"];
        $mahasiswa["angkatan"] = $array["angkatan"];

        $proyekContrib = kelompokController::getProyekFromMahasiswa($id);
        $sosialMedia = sosialMediaController::getSosialMediaByIdMahasiswa($id);

        $mahasiswa["proyek"] = $proyekContrib;
        $mahasiswa["sosial_media"] = $sosialMedia;
        return $mahasiswa;
    }

}
