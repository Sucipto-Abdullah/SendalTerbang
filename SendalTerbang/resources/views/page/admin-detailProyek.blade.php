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
                        @if($proyek["proposal"] != "")
                            <a class="detail-value detail-file" href="document/Proposal/{{$proyek["proposal"]}}.pdf"><li>Proposal</li></a>
                        @else
                            <a class="detail-value detail-file" href=""><li>Proposal</li></a>
                        @endif
                    </ul>
                </li>
                <li class="detail-header">Laporan Proyek :
                    <ul>
                        @if($proyek["laporan"] != "")
                            <a class="detail-value detail-file" href="document/Laporan/{{$proyek["laporan"]}}.pdf"><li>Laporan</li></a>
                        @else
                            <a class="detail-value detail-file" href=""><li>Laporan</li></a>
                        @endif
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
                @foreach ( $proyek["images"] as $image )
                    <li><a href="{{ asset("images/chips.jpg") }}"><img src="{{ asset("images/chips.jpg") }}" alt=""></a></li>
                @endforeach
            </ul>
        </li>

        <li class="detail-header">Terakhir diperbarui : 
            <ul>
                <li class="detail-value" >{{ $proyek["diperbarui"] }}</li>
            </ul>
        </li>

        <li class="detail-header detail-group">Kontributor :

            <ul>
                <li class="detail-header detail-mahasiswa">Mahasiswa :
                    <ul>
                        @foreach ( $proyek["mahasiswa"] as $mahasiswa )
                        
                            <li class="detail-value"><a href="/admin-kelola-akun">{{ $mahasiswa["nama"] }} ({{ $mahasiswa["nim"] }})</a></li>
                        
                        @endforeach
                    </ul>
                </li>
                
                <li class="detail-header detail-dosen">Dosen Pembimbing : 
                    <ul>
                        <li class="detail-value"><a href="/admin-kelola-akun">-</a></li>
                    </ul>
                </li>
                
            </ul>

        </li>

    </ul>

</div>