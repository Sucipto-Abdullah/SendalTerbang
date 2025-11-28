<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek; 

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

}

