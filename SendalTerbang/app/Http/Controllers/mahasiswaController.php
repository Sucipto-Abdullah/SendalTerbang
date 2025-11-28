<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use App\Models\Users;
use App\Http\Controllers\kelompokController;
use App\Http\Controllers\proyekController;
use App\Http\Controllers\sosialMediaController;
use App\Models\User;
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
    
    public static function getMahasiswaFromUserId(int $id){
        $mahasiswaID = mahasiswa::where("userID", (string)$id)->get()->first()["id"];
        $mahasiswaData = self::getMahasiswaById($mahasiswaID);
        return $mahasiswaData;
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
        $user = Users::where("id", $array["userID"])->get()->first();

        $mahasiswa["id"] = $array["id"];
        $mahasiswa["nama"] = $user["username"];
        $mahasiswa["nim"] = $user["kode"];
        $mahasiswa["kelas"] = $array["kelas"];
        $mahasiswa["email"] = $user["email"];
        $mahasiswa["angkatan"] = $array["angkatan"];

        $proyekContrib = kelompokController::getProyekFromMahasiswa($array["id"]);
        $sosialMedia = sosialMediaController::getSosialMediaByIdMahasiswa($id);

        $mahasiswa["proyek"] = $proyekContrib;
        $mahasiswa["sosial_media"] = $sosialMedia;
        return $mahasiswa;
    }

    public static function addMahasiswa( array $mahasiswa){
        $userData = [
            'username' => $mahasiswa["nama"],
            'kode' => $mahasiswa["nim"],
            'email' => $mahasiswa["email"],
            'role' => "mahasiswa",
            'password' => bcrypt($mahasiswa["password"])
        ];
        Users::create($userData);

        $userId = Users::where("password", $userData["password"])->get()->first()["id"];

        $mahasiswaData = [
            "userID" => (int)$userId,
            "angkatan" => (int)$mahasiswa["angkatan"],
            "kelas" => (string)$mahasiswa["kelas"]
        ];

        mahasiswa::create($mahasiswaData);
        return true;
    }

    public static function isExist( array $mahasiswa ){
        $nim = $mahasiswa["nim"];
        if( count(self::getMahasiswaListFromKeyword($nim)) > 0 ){
            return true;
        }
        return false;
    }

}
