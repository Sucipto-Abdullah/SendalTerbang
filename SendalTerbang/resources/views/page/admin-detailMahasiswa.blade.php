<?php
use App\Models\Hash;
?>

<div class="detail-proyek">

    <div class="detail-header-yanglainnya">
        <h1 class="detail-back-btn">
            <a href="/admin-kelola-akun"><i class="bi bi-arrow-left-circle"></i> back</a>
        </h1>

        <h1 class="detail-header-proyek" ><i class="bi bi-journal-text"></i> Detail Mahasiswa</h1>
    </div>

    <ul class="detail-list">

        <li class="detail-panel-project">

            <ul>
                <li class="detail-header">Nama :
                    <ul>
                        <li class="detail-value">{{ $mahasiswa["nama"] }}</li>
                    </ul>
                </li>
    
                <li class="detail-header">Nomor Induk Mahasiswa : 
                    <ul>
                        <li class="detail-value" >{{ $mahasiswa["nim"] }}</li>
                    </ul>
                </li>
                
            </ul>

        </li>

        <li class="detail-panel-project">

            <ul>
                <li class="detail-header">Angkatan :
                    <ul>
                        <li class="detail-value">{{ $mahasiswa["angkatan"] }}</li>
                    </ul>
                </li>
    
                <li class="detail-header">Kelas : 
                    <ul>
                        <li class="detail-value" >B</li>
                    </ul>
                </li>
                
            </ul>

        </li>

        <li class="detail-link">Web : 
            <ul>
                <li class="detail-value"><a href="http://proyek2a6.proyek.jti.polindra.ac.id/">http://proyek2a6.proyek.jti.polindra.ac.id/</a></li>
            </ul>
        </li>

        <li class="detail-header detail-group">Berkontribusi di Proyek :

            <ul>
                <li class="detail-header detail-mahasiswa">
                    <ul>
                        @foreach ($mahasiswa["proyek"] as $proyek )
                            <li class="detail-value"><a href="/admin-detail-proyek?proyekInfo={{ Hash::getHashId($proyek["id"]) }}">{{ $proyek["judul"] }}</a></li>
                        @endforeach
                    </ul>
                </li>
                
            </ul>

        </li>

        <li class="detail-header detail-group">Contact :

            <ul>
                <li class="detail-header detail-mahasiswa">Mahasiswa :
                    <ul>
                        @foreach ( $mahasiswa["sosial_media"] as $sosialMedia )
                            <a href="{{ $sosialMedia["link"] }}"><li class="detail-value">{{ $sosialMedia["nama"] }}</li></a>
                        @endforeach
                    </ul>
                </li>
                
                <li class="detail-header detail-dosen">Email : 
                    <ul>
                        <li class="detail-value"><a href="mailto:{{ $mahasiswa["email"] }}">{{ $mahasiswa["email"] }}</a></li>
                    </ul>
                </li>
                
            </ul>

        </li>

    </ul>

</div>