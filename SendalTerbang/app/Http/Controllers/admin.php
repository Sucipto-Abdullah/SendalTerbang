<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\proyekController;
use App\Models\proyek;
use App\Models\Hash;
use App\Models\kelompok;
use App\Models\gambarProyek;

class admin extends Controller
{
    public function admin( ){
        
        $part = 'dashboard';
        $mahasiswa = mahasiswa::all();
        $proyek = proyek::all();
        $jumlah_proyek = count($proyek);
        $proyek_ver = proyek::where("verifikasi", true)->get();
        return view("layouts/admin", compact("part", "mahasiswa", "jumlah_proyek", "proyek", "proyek_ver"));
    }
    public function kelolaAkun(){

        $part = 'kelolaAkun';
        $page = "kelolaAkun";
        
        if( isset($_GET["keyword"]) ){
            $keyword = $_GET["keyword"];
            $search_history = $keyword;
            $mahasiswa = mahasiswaController::getMahasiswaFromKeyword($keyword);
            return view("layouts/admin", compact("part", "mahasiswa", "search_history"));
        }else{
            $mahasiswa = mahasiswa::all();
            $search_history = "";
            return view("layouts/admin", compact("part", "mahasiswa", "search_history") );
        }
    }

    public function kelolaProyek(){

        $part = 'kelolaProyek';

        if(isset($_GET["keyword"])){
            $keyword = $_GET["keyword"];
            $proyek = proyekController::getProyekByKeyWord($keyword);
            return view("layouts/admin", compact("part", "proyek", "keyword"));
        }else{
            $proyek = proyek::all();
            return view("layouts/admin", compact("part", "proyek"));
        }
    }
    
    public function detailProyek(){
        if(isset($_GET["proyekInfo"])){
            try {    
                $proyekID = Hash::getRevHashId((int)$_GET["proyekInfo"]);
                $part = "detailProyek";
                $proyek = proyekController::getProyekById($proyekID);
                return view("layouts/admin", compact("part", "proyek"));
            } catch (\Throwable $th) {
                $part = "nullProyek";
                return view("layouts/admin", compact("part", ));
            }
        }else{
            self::kelolaProyek();
        }
    }

    public function detailAkun(){
        if(isset($_GET["akunInfo"])){
            try {    
                $mahasiswaID = Hash::getRevHashId((int)$_GET["akunInfo"]);
                $part = "detailMahasiswa";
                $mahasiswa = mahasiswaController::getMahasiswaById($mahasiswaID);
                return view("layouts/admin", compact("part", "mahasiswa"));
            } catch (\Throwable $th) {
                $part = "nullProyek";
                return view("layouts/admin", compact("part"));
            }
        }else{
            self::kelolaAkun();
        }
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
