<div class="detail-proyek">

    <div class="detail-header-yanglainnya">
        <h1 class="detail-back-btn">
            <a href="/admin-kelola-proyek"><i class="bi bi-arrow-left-circle"></i> back</a>
        </h1>

        <h1 class="detail-header-proyek" ><i class="bi bi-journal-text"></i> Detail Proyek</h1>
    </div>

    <ul class="detail-list">

        <li class="detail-panel-project">

            <ul>
                <li class="detail-header">Judul :
                    <ul>
                        <li class="detail-value">{{ $proyek["judul"] }}</li>
                    </ul>
                </li>
    
                <li class="detail-header">Rating : 
                    <ul>
                        <li class="detail-value" >-/10</li>
                    </ul>
                </li>
                
            </ul>

        </li>

        <li class="detail-header">Deskripsi : 
            <ul>
                <li class="detail-value detail-desc">{{ $proyek["deskripsi"] }}
                </li>
            </ul>
        </li>

        <li class="detail-header">Mitra :
            <ul>
                <li class="detail-value">Kampus</li>
            </ul>
        </li>

        <li class="detail-panel-project">
            <ul>
                <li class="detail-header">Proposal Proyek :
                    <ul>
                        <a class="detail-value detail-file" href="document/PROPOSAL_TUBES_KELOMPOK_6.pdf"><li>Proposal</li></a>
                    </ul>
                </li>
                <li class="detail-header">Laporan Proyek :
                    <ul>
                        <a class="detail-value detail-file" href="document/PROPOSAL_TUBES_KELOMPOK_6.pdf"><li>Laporan</li></a>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="detail-link">Link : 
            <ul>
                <li class="detail-value"><a href="http://proyek2a6.proyek.jti.polindra.ac.id/">http://proyek2a6.proyek.jti.polindra.ac.id/</a></li>
            </ul>
        </li>

        <li class="detail-header detail-image">Gambar : 
            <ul>
                <li><a href="{{ asset("images/chips.jpg") }}"><img src="{{ asset("images/chips.jpg") }}" alt=""></a></li>
                <li><a href="{{ asset("images/chips.jpg") }}"><img src="{{ asset("images/chips.jpg") }}" alt=""></a></li>
                <li><a href="{{ asset("images/chips.jpg") }}"><img src="{{ asset("images/chips.jpg") }}" alt=""></a></li>
                <li><a href="{{ asset("images/chips.jpg") }}"><img src="{{ asset("images/chips.jpg") }}" alt=""></a></li>
                <li><a href="{{ asset("images/chips.jpg") }}"><img src="{{ asset("images/chips.jpg") }}" alt=""></a></li>
                <li><a href="{{ asset("images/chips.jpg") }}"><img src="{{ asset("images/chips.jpg") }}" alt=""></a></li>
                <li><a href="{{ asset("images/chips.jpg") }}"><img src="{{ asset("images/chips.jpg") }}" alt=""></a></li>
            </ul>
        </li>

        <li class="detail-header">Terakhir diperbarui : 
            <ul>
                <li class="detail-value" >19:45 29 September 2025</li>
            </ul>
        </li>

        <li class="detail-header detail-group">Kontributor :

            <ul>
                <li class="detail-header detail-mahasiswa">Mahasiswa :
                    <ul>
                        <li class="detail-value"><a href="/admin-kelola-akun">Sucipto Abdullah (2403065) (Ketua)</a></li>
                        <li class="detail-value"><a href="/admin-kelola-akun">Firly Alam Sudrajat (2403064)</a></li>
                        <li class="detail-value"><a href="/admin-kelola-akun">A Chrome a tool Hidayah (2403039)</a></li>
                        <li class="detail-value"><a href="/admin-kelola-akun">Anindita Oktaviani (2403036)</a></li>
                    </ul>
                </li>
                
                <li class="detail-header detail-dosen">Dosen Pembimbing : 
                    <ul>
                        <li class="detail-value"><a href="/admin-kelola-akun">-</a></li>
                        <!-- <li class="detail-value" >-</li> -->
                    </ul>
                </li>
                
            </ul>

        </li>

    </ul>

    <!-- <ul>
        <li class="detail-header">Judul :
            <ul>
                <li class="detail-value">APLIKASI PENGOLAHAN DATA MATA KULIAH PROYEK</li>
            </ul>
        </li>
        <li class="detail-header">Deskripsi : 
            <ul>
                <li class="detail-value detail-desc">Aplikasi Pengolahan Data Mata Kuliah Proyek merupakan aplikasi digital yang dirancang untuk memfasilitasi kebutuhan mahasiswa dalam mengumpulkan,menyimpan, dan mempublikasikan hasil proyek kuliah.
Melalui aplikasi ini, hasil proyek mahasiswa tidak hanya terdokumentasi dengan baik, tetapi juga dapat diakses secara luas sebagai bentuk apresiasi dan referensi bagi civitas akademika maupun masyarakat umum.
                </li>
            </ul>
        </li>
        <li class="detail-header">Mitra :
            <ul>
                <li class="detail-value">Kampus</li>
            </ul>
        </li>
        <li class="detail-header">Proposal Proyek :
            <ul>
                <a class="detail-file" href="document/PROPOSAL_TUBES_KELOMPOK_6.pdf"><li>Proposal</li></a>
            </ul>
        </li>
        <li class="detail-header">Laporan Proyek :
            <ul>
                <a class="detail-file" href="document/PROPOSAL_TUBES_KELOMPOK_6.pdf"><li>Laporan</li></a>
            </ul>
        </li>
        <li class="detail-header">Link : 
            <ul>
                <li><a href="http://proyek2a6.proyek.jti.polindra.ac.id/">http://proyek2a6.proyek.jti.polindra.ac.id/</a></li>
            </ul>
        </li>
        <li class="detail-header">Gambar : 
            <ul>
                <li>gambar1</li>
                <li>gambar2</li>
                <li>gambar3</li>
            </ul>
        </li>
        <li class="detail-header">Pembimbing : 
            <ul>
                <li>Bapak Mustami'in</li>
            </ul>
        </li>
        <li class="detail-header">Anggota : 
            <ul>
                <li>Sucipto Abdullah (2403065) (Ketua)</li>
                <li>Firly Alam Sudrajat (2403064) </li>
                <li>A Chrome a tool Hidayah (2403039)</li>
                <li>Anindita Oktaviani (2403036)</li>
            </ul>
        </li>
        <li class="detail-header">Terakhir diperbarui : 
            <ul>
                <li>19:45 29 September 2025</li>
            </ul>
        </li>
        <li class="detail-header">Rating : 
            <ul>
                <li>-/10</li>
            </ul>
        </li>
    </ul> -->


</div>