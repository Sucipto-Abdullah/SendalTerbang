<?php
use App\Models\Hash;
?>

<div class="table list-project">

    <form class="find-project" action="/admin-kelola-proyek" method="GET">
        <input class="find-project-input" type="text" value="{{ isset($keyword) ? $keyword : "" }}" name="keyword" placeholder="cari Proyek">
        <button class="find-project-button">Cari</button>
    </form>

    <table class="table list-table">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Link</th>
            <th>Updated</th>
            <th>Aksi</th>
        </tr>
        @for($i=0; $i<count($proyek);$i++)
        <tr>
            <td class="cenCol">{{ $i+1 }}</td>
            <td>{{ $proyek[$i]["judul"] }}</td>
            <td class="cenCol">{{ $proyek[$i]["link"] }}</td>
            <td class="cenCol">{{ $proyek[$i]["diperbarui"] }}</td>
            <td class="cenCol">
                <form action="/admin-detail-proyek" method="GET">
                    <button name="proyekInfo" value="{{ Hash::getHashId($proyek[$i]["id"]) }}" class="project-info-button">Info</button>
                </form>
            </td>
        </tr>
        @endfor
    </table>

</div>