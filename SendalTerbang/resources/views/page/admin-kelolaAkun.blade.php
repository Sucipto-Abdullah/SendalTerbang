<div class="table list-project">

    <form class="find-project" action="">
        <input class="find-project-input" type="text" placeholder="cari akun">
        <button class="find-project-button">Cari</button>
    </form>

    <table class="table list-table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
        </tr>
        @for($i=0; $i<10;$i++)
        <tr>
            <td class="cenCol">1</td>
            <td>Sucipto Abdullah</td>
            <td class="cenCol">2403065</td>
            <td class="cenCol">ciptoabdul23@gmail.com</td>
        </tr>
        @endfor
    </table>

</div>