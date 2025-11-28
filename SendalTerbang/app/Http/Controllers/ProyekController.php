<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek; 
use App\Models\gambarProyek; 

class ProyekController extends Controller
{
        public function store(Request $request)
    {
        $request->validate([
            'user_id' => auth()->id(),
            'judul_proyek' => 'required',
            'nama_anggota' => 'required',
            'dosen_pembimbing' => 'required',
            'tahun_penerbit' => 'required|digits:4',
            'file_laporan' => 'nullable|mimes:pdf,zip|max:4096',
            'foto_proyek' => 'nullable|image|mimes:jpg,jpeg,png|max:4096'
        ]);

        // Upload file laporan
        $namaLaporan = null;
        if ($request->hasFile('file_laporan')) {
            $namaLaporan = time().'_'.$request->file_laporan->getClientOriginalName();
            $request->file_laporan->storeAs('laporan', $namaLaporan);
        }

        // Upload foto proyek
        $namaFoto = null;
        if ($request->hasFile('foto_proyek')) {
            $namaFoto = time().'_'.$request->foto_proyek->getClientOriginalName();
            $request->foto_proyek->storeAs('foto_proyek', $namaFoto);
        }

        Proyek::create([
            'user_id' => auth()->id(), // <== tambahkan ini
            'judul_proyek' => $request->judul_proyek,
            'nama_anggota' => $request->nama_anggota,
            'dosen_pembimbing' => $request->dosen_pembimbing,
            'mitra' => $request->mitra,
            'angkatan' => $request->angkatan,
            'tahun_penerbit' => $request->tahun_penerbit,
            'file_laporan' => $namaLaporan,
            'url_proyek' => $request->url_proyek,
            'foto_proyek' => $namaFoto,
            'status' => 'Menunggu',
        ]);


        return redirect()->route('proyek.index');
    }

    public function index()
    {
        $proyek = Proyek::orderBy('created_at', 'desc')->get();

        return view('layouts/proyek.index', compact('proyek'));
    }

    public function edit($id)
    {
        $proyek = Proyek::findOrFail($id);
        return view('proyek.edit', compact('proyek'));
    }

    public function update(Request $request, $id)
    {
        $proyek = Proyek::findOrFail($id);

        $request->validate([
            'judul_proyek' => 'required',
            'nama_anggota' => 'required',
            'dosen_pembimbing' => 'required',
            'tahun_penerbit' => 'required|digits:4',
            'file_laporan' => 'nullable|mimes:pdf,zip|max:4096',
            'foto_proyek' => 'nullable|image|mimes:jpg,jpeg,png|max:4096'
        ]);

        // upload file laporan jika diganti
        if ($request->hasFile('file_laporan')) {
            $namaLaporan = time().'_'.$request->file_laporan->getClientOriginalName();
            $request->file_laporan->storeAs('laporan', $namaLaporan);
            $proyek->file_laporan = $namaLaporan;
        }

        // upload foto proyek jika diganti
        if ($request->hasFile('foto_proyek')) {
            $namaFoto = time().'_'.$request->foto_proyek->getClientOriginalName();
            $request->foto_proyek->storeAs('foto_proyek', $namaFoto);
            $proyek->foto_proyek = $namaFoto;
        }

        $proyek->update([
            'judul_proyek' => $request->judul_proyek,
            'nama_anggota' => $request->nama_anggota,
            'dosen_pembimbing' => $request->dosen_pembimbing,
            'mitra' => $request->mitra,
            'angkatan' => $request->angkatan,
            'tahun_penerbit' => $request->tahun_penerbit,
            'url_proyek' => $request->url_proyek,
        ]);

        return redirect()->route('proyek.index');
    }

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
        $Arr_group = kelompokController::getKelompokFromProyek($id);

        $img_location = array();
        $mahasiswa = array();

        foreach($Arr_img as $img){
            $img_loc = $img["lokasi"];
            array_push($img_location, $img_loc);
        }

        $array["images"] = $img_location;
        $array["mahasiswa"] = $Arr_group;
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

    public static function addNewProyek( Request $request, array $kelompok){
        $projectTable = [
            "judul" => $request->input("judul"),
            "deskripsi" => $request->input("deskripsi"),
            "link" => $request->input("link", ""),
            "diperbarui" => new DateTime(),
            "proposal" => $request->input("proposal", ""),
            "laporan" => $request->input("laporan", "")
        ];

        proyek::created($projectTable);
        $projectId = proyek::all()->last();
        kelompokController::addKelompok($projectId, $kelompok);
    }

}

