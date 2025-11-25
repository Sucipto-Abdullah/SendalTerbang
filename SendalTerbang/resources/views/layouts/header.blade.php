<header class="bg-polindra text-white sticky-top shadow-sm">
    <div class="header-top">
        <div class="container">
            <div class="d-flex align-items-center">
                <a class="navbar-brand d-flex align-items-center text-decoration-none text-white" href="{{ url('/') }}">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo" width="50" height="50" class="me-3">
                    <div>
                        <div class="fw-bold fs-5">POLITEKNIK NEGERI INDRAMAYU</div>
                        <div class="small opacity-75">Repository & Expo Project</div>
                    </div>
                </a>

                <!-- PERBAIKAN: Hamburger menu di luar nav-main -->
                <button class="navbar-toggler d-lg-none border-0 ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- User menu untuk desktop -->
                <div class="ms-auto d-none d-lg-flex align-items-center user-menu">
                    @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm px-3 me-2">Login</a>
                    @endguest

                    @auth
                        <div class="dropdown user-dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center text-white text-decoration-none" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-avatar me-2">
                                    <img src="{{ asset('image/profile-default.png') }}" alt="Avatar">
                                </div>
                                <span class="user-name">{{ Auth::user()->username }}</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end shadow user-menu-animated" aria-labelledby="userDropdown">
                                <li class="dropdown-header text-center">
                                    <div class="user-avatar-lg mx-auto mb-2">
                                        <img src="{{ asset('image/profile-default.png') }}" alt="Avatar">
                                    </div>
                                    <h6 class="mb-0">{{ ucfirst(Auth::user()->username) }}</h6>
                                    <small class="text-muted">{{ ucfirst(Auth::user()->role) }}</small>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="bi bi-person me-2"></i> Profil Saya</a></li>
                                <li><a class="dropdown-item" href="{{ route('userProyek') }}"><i class="bi bi-clipboard-data me-2"></i>Proyek</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Pengaturan</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger"><i class="bi bi-box-arrow-right me-2"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- Navigasi utama - INI YANG ADA UNDERLINENYA -->
    <nav class="navbar navbar-expand-lg nav-main p-0">
        <div class="container">
            <!-- Menu navigasi -->
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link active">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/repository') }}" class="nav-link">Repository</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/expo') }}" class="nav-link">Expo</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about') }}" class="nav-link">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/contact') }}" class="nav-link">Kontak</a>
                    </li>
                </ul>

                <!-- User menu untuk mobile -->
                <div class="d-lg-none user-menu-mobile mt-3">

                    @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-light w-100 btn-sm">Login</a>
                    @endguest

                    @auth
                    <div class="mobile-user-box text-center text-white py-3">

                        <!-- Avatar -->
                        <div class="user-avatar-lg mx-auto mb-2">
                            <img src="{{ asset('image/profile-default.png') }}" alt="Avatar">
                        </div>

                        <!-- Username + Role -->
                        <h6 class="mb-0">{{ ucfirst(Auth::user()->username) }}</h6>
                        <small class="text-light">{{ ucfirst(Auth::user()->role) }}</small>

                        <hr class="text-white my-3">

                        <!-- Menu list -->
                        <a href="{{ route('profile') }}" class="mobile-user-link">
                            <i class="bi bi-person me-2"></i> Profil Saya
                        </a>
                        <a href="{{ route('userProyek') }}" class="mobile-user-link">
                            <i class="bi bi-clipboard-data me-2"></i> Proyek
                        </a>
                        <a href="#" class="mobile-user-link">
                            <i class="bi bi-gear me-2"></i> Pengaturan
                        </a>

                        <hr class="text-white my-3">

                        <!-- Logout -->
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="mobile-user-link text-danger w-100 text-center mt-2">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </button>
                        </form>
                    </div>
                    @endauth

                </div>

            </div>
        </div>
    </nav>
</header>