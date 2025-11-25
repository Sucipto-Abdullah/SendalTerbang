<?php
use App\Models\Hash;
?>

<div class="table list-project">

    <form class="find-project" action="/admin-kelola-akun" name="search-akun" method="GET">
        <input class="find-project-input" value="{{ isset($search_history) ? $search_history : "" }}" name="keyword" type="text" placeholder="cari akun">
        <button class="find-project-button">Cari</button>
    </form>

    <table class="table list-table">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Angkatan</th>
            <th>Email</th>
            <th>Akis</th>
        </tr>
        @for($i=0; $i< count($mahasiswa) ;$i++)
        <tr>
            <td class="cenCol">{{ $i+1 }}</td>
            <td class="cenCol">{{ $mahasiswa[$i]["nim"] }}</td>
            <td>{{ $mahasiswa[$i]["nama"] }}</td>
            <td>{{ $mahasiswa[$i]["angkatan"] }}</td>
            <td class="cenCol">{{ $mahasiswa[$i]["email"] }}</td>
            <td class="cenCol">
                <form action="admin-detail-akun" method="GET">
                    <button name="akunInfo" value="{{ Hash::getHashId($mahasiswa[$i]["id"]) }}" class="project-info-button">Info</button>
                </form>
            </td>
        </tr>
        @endfor
    </table>
</div>
