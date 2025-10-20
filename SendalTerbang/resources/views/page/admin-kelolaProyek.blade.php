<div class="table list-project">

    <form class="find-project" action="">
        <input class="find-project-input" type="text" placeholder="cari akun">
        <button class="find-project-button">Cari</button>
    </form>

    <table class="table list-table">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kelas</th>
            <th>Ankatan</th>
            <th>Aksi</th>
        </tr>
        @for($i=0; $i<10;$i++)
        <tr>
            <td class="cenCol">$i</td>
            <td>Wingspart25</td>
            <td class="cenCol">2B</td>
            <td class="cenCol">2024</td>
            <td class="cenCol">.</td>
        </tr>
        @endfor
    </table>

</div>