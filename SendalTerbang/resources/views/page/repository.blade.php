    <section class="repository-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold">Repository Project</h1>
                    <p class="lead mt-3">
                        Jelajahi semua hasil proyek, penelitian, dan karya inovatif civitas akademika 
                        Politeknik Negeri Indramayu dari tahun ke tahun.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="mt-4 mt-lg-0">
                        <span class="badge bg-light text-primary fs-6 p-3">Total: 48 Projects</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-projects py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 text-primary">Top Project</h2>

            <div id="topProjectCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="project-slide">
                            <div class="project-image">
                                <img src="{{asset('image/gsc.jpg')}}" alt="Sistem Informasi Koperasi">
                            </div>
                            <div class="project-content">
                                <h3 class="fw-semibold text-primary">Sistem Informasi Koperasi</h3>
                                <p class="mt-3">
                                    Aplikasi untuk pengelolaan data anggota dan transaksi koperasi digital. 
                                    Sistem ini memudahkan pengelolaan keuangan, inventaris, dan laporan keuangan 
                                    koperasi secara real-time dengan antarmuka yang user-friendly.
                                </p>
                                <div class="mt-4">
                                    <span class="badge bg-primary me-2">PHP</span>
                                    <span class="badge bg-success me-2">Laravel</span>
                                    <span class="badge bg-info me-2">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="project-slide">
                            <div class="project-image">
                                <img src="{{asset('image/background1.jpg')}}" alt="Smart Parking IoT">
                            </div>
                            <div class="project-content">
                                <h3 class="fw-semibold text-primary">Smart Parking IoT</h3>
                                <p class="mt-3">
                                    Sistem parkir otomatis berbasis sensor dan pemantauan jarak jauh. 
                                    Menggunakan teknologi IoT untuk mendeteksi ketersediaan slot parkir 
                                    dan memberikan informasi real-time kepada pengguna melalui aplikasi mobile.
                                </p>
                                <div class="mt-4">
                                    <span class="badge bg-primary me-2">Arduino</span>
                                    <span class="badge bg-success me-2">IoT</span>
                                    <span class="badge bg-info me-2">Mobile App</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="project-slide">
                            <div class="project-image">
                                <img src="{{asset('images/chips.jpg')}}" alt="E-Library Mobile App">
                            </div>
                            <div class="project-content">
                                <h3 class="fw-semibold text-primary">E-Library Mobile App</h3>
                                <p class="mt-3">
                                    Aplikasi mobile untuk peminjaman dan baca buku digital di kampus. 
                                    Memungkinkan mahasiswa dan dosen mengakses koleksi perpustakaan digital 
                                    kapan saja dan di mana saja dengan fitur pencarian yang canggih.
                                </p>
                                <div class="mt-4">
                                    <span class="badge bg-primary me-2">Flutter</span>
                                    <span class="badge bg-success me-2">Firebase</span>
                                    <span class="badge bg-info me-2">REST API</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tombol navigasi -->
                <button class="carousel-control-prev" type="button" data-bs-target="#topProjectCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#topProjectCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>

                <!-- Indikator slide -->
                <div class="carousel-indicators mt-4">
                    <button type="button" data-bs-target="#topProjectCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#topProjectCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#topProjectCarousel" data-bs-slide-to="2"></button>
                </div>
            </div>
        </div>
    </section>

{{-- All project --}}
    <section class="all-projects">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Projects</h2>
            </div>

        <div class="row mb-4 g-2 align-items-center">
            <div class="col-md-6 col-lg-5 pencarian">
                <form action="" method="GET" class="d-flex gap-2">
                    <input type="text" name="q" class="form-control" placeholder="Cari project..." value="">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="col-md-6 col-lg-3 filter-tahun">
                <form action="" method="GET">
                    <select name="year" class="form-select" onchange="this.form.submit()">
                        <option value="">Filter Tahun</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                    </select>
                </form>
            </div>
        </div>



            <div class="row">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-image-container">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="E-Learning Platform">
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">E-Learning Platform</h3>
                            <p class="project-description">
                                Platform pembelajaran online interaktif dengan fitur video streaming, quiz, dan sertifikat digital.
                            </p>
                            <div class="project-tech">
                                <span class="tech-tag">React</span>
                                <span class="tech-tag">Node.js</span>
                                <span class="tech-tag">MongoDB</span>
                                <span class="tech-tag">+1</span>
                            </div>
                            <div class="project-meta">
                                <span class="project-year">2024</span>
                                <span class="project-members">
                                    <i class="fas fa-users"></i> 3 members
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-image-container">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Smart Campus IoT System">
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">Smart Campus IoT System</h3>
                            <p class="project-description">
                                Sistem IoT untuk monitoring ruang kelas, energi, dan keamanan kampus secara real-time.
                            </p>
                            <div class="project-tech">
                                <span class="tech-tag">Arduino</span>
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">MQTT</span>
                            </div>
                            <div class="project-meta">
                                <span class="project-year">2024</span>
                                <span class="project-members">
                                    <i class="fas fa-users"></i> 2 members
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <div class="project-image-container">
                            <img src="https://images.unsplash.com/photo-1531746790731-6c087fecd65a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="AI-Powered Chatbot Assistant">
                        </div>
                        <div class="project-info">
                            <h3 class="project-title">AI-Powered Chatbot Assistant</h3>
                            <p class="project-description">
                                Asisten virtual berbasis AI untuk membantu mahasiswa dengan informasi akademik dan administrasi.
                            </p>
                            <div class="project-tech">
                                <span class="tech-tag">Python</span>
                                <span class="tech-tag">TensorFlow</span>
                                <span class="tech-tag">NLP</span>
                            </div>
                            <div class="project-meta">
                                <span class="project-year">2023</span>
                                <span class="project-members">
                                    <i class="fas fa-users"></i> 3 members
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

    <style>
        .repository-hero {
            background: linear-gradient(135deg,#002f6c, #005bb5);
            color: white;
            padding: 80px 0 60px 
        }
        .pencarian {
            width: 300px;
        }
        .filter-tahun{
                width: 300px;
            }

        @media (min-width: 992px) {
            .pencarian {
                width: 400px;
            }
            .filter-tahun{
                margin-top: 20px;
            }
        }

        select.form-select {
            border: 1px solid #ced4da;
            padding: 10px;
            transition: all 0.2s ease;
        }

        select.form-select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13,110,253,.25);
        }

    </style>