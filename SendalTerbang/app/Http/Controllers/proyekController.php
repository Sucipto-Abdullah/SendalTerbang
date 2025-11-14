<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyek;
use App\Models\kelompok;
use App\Models\mahasiswa;
use App\Models\gambarProyek;
use Ramsey\Collection\Collection;

class proyekController extends Controller
{
    public static function getProyekByKeyWord( string $keyword){
        $array = proyek::where("judul", "like", "%".(string)$keyword."%")->get();
        return $array;
    }

    public static function getImageProyekById(int $id){
        $imageArray = gambarProyek::where("proyek", (string)$id)->get();
        return $imageArray;
    }

    public static function getProyekById( int $id ){
        $array = proyek::where("id", (string)$id)->get()->first();
        $Arr_img = self::getImageProyekById($id);
        $img_location = array();
        
        foreach($Arr_img as $img){
            $img_loc = $img["lokasi"];
            array_push($img_location, $img_loc);
        }
        $array["images"] = $img_location;
        return $array;
    }

    public static function getProyekByMahasiswaId( int $id ){
        $kelompok = kelompok::where("mahasiswa", $id)->get();
        $proyek = array();
        foreach($kelompok as $kel){
            $idProyek = $kel["proyek"];
            $getProyek = self::getProyekById($idProyek);
            array_push($proyek, $getProyek);
        }
        return $proyek;
    }

    public static function setProyekById(int $id, array $array){
        try {
            $proyek = proyek::findOrFail($id);
            $proyek->update($array);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public static function delProyekById(int $id, array $array){
        try {
            $proyek = proyek::findOrFail($id);
            $proyek->dropColumn($array);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public static function createProyek(array $array){
        try {
            proyek::create($array);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
