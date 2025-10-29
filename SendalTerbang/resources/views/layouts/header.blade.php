
  
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

        <!-- Navigasi utama -->
        <nav class="navbar navbar-expand-lg nav-main p-0">
            <div class="container">
                <!-- Toggle button untuk mobile -->
                <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

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
                    <div class="d-lg-none user-menu">
                        @guest
                        <div class="d-grid gap-2">
                            <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm">Login</a>
                        </div>
                        @endguest

                        @auth
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center text-white text-decoration-none" href="#" id="userDropdownMobile" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle me-2"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu w-100">
                                <li><a class="dropdown-item" href="{{ route('profile') }}">Profil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </header>
