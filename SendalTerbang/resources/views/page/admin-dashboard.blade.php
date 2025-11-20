<?php

use App\Models\mahasiswa;
use App\Models\proyek;

$mahasiswa = mahasiswa::all();
$jumlah_mahasiswa = count($mahasiswa);

$proyek = proyek::all();
$jumlah_proyek = count($proyek);
$proyek_ver = proyek::where("verifikasi", true)->get();
$jumlah_proyek_tervertivikasi = count($proyek_ver);



?>

<div class="dashboard">
    <div class="Admin-header">
        <h1><i class="bi bi-gear-wide"></i> Sendal Terbang</h1>
    </div>

    <div class="project-status">
        <h1 class="project-status-header">Project</h1>

        <div class="status">

            <div class="status-container">
                <h1>Project</h1>
                <p>{{ $jumlah_proyek }}</p>
            </div>

            <div class="status-container">
                <h1>mahasiswa</h1>
                <p>{{ $jumlah_mahasiswa }}</p>
            </div>

            <div class="status-container">
                <h1>Vertify</h1>
                <p>{{ $jumlah_proyek_tervertivikasi }}</p>
            </div>

        </div>

    </div>

</div>

@include("page.admin-kelolaProyek", [$proyek])

@include("page.admin-kelolaAkun", [$mahasiswa])