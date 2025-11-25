<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';

    protected $fillable = [
        'user_id',
        'judul_proyek',
        'nama_anggota',
        'dosen_pembimbing',
        'mitra',
        'angkatan',
        'tahun_penerbit',
        'file_laporan',
        'url_proyek',
        'foto_proyek',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

