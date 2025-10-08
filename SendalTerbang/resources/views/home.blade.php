<head>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>

<body>
    <header>
        @include('element.header')
    </header>

    <section class="hero">
            <div class="container">
                <h1>Kumpulan Tugas & Proyek Web</h1>
                <p>Temukan berbagai contoh implementasi web development dari tugas-tugas kuliah dan proyek pribadi. Dari HTML dasar hingga aplikasi web modern.</p>
            </div>
        </section>
        
        <section class="projects">
            <div class="container">
                <h2 class="section-title">Proyek Terbaru</h2>
                <div class="projects-grid">
                    <!-- Proyek 1 -->
                    <div class="project-card">
                        <div class="project-image" style="background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%);">
                            E-Commerce Store
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Toko Online Elektronik</h3>
                            <p class="project-description">Website e-commerce dengan fitur keranjang belanja, pembayaran, dan sistem manajemen produk.</p>
                            <div class="project-tags">
                                <span class="tag">HTML</span>
                                <span class="tag">CSS</span>
                                <span class="tag">JavaScript</span>
                                <span class="tag">PHP</span>
                            </div>
                            <a href="#" class="project-link">Lihat Proyek</a>
                        </div>
                    </div>
                    
                    <!-- Proyek 2 -->
                    <div class="project-card">
                        <div class="project-image" style="background: linear-gradient(135deg, #48cae4 0%, #023e8a 100%);">
                            Social Media Dashboard
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Dashboard Media Sosial</h3>
                            <p class="project-description">Dashboard analitik untuk memantau performa akun media sosial dengan grafik interaktif.</p>
                            <div class="project-tags">
                                <span class="tag">React</span>
                                <span class="tag">Chart.js</span>
                                <span class="tag">API</span>
                            </div>
                            <a href="#" class="project-link">Lihat Proyek</a>
                        </div>
                    </div>
                    
                    <!-- Proyek 3 -->
                    <div class="project-card">
                        <div class="project-image" style="background: linear-gradient(135deg, #9d4edd 0%, #3c096c 100%);">
                            Travel Blog
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Blog Perjalanan</h3>
                            <p class="project-description">Website blog dengan sistem manajemen konten untuk berbagi pengalaman traveling.</p>
                            <div class="project-tags">
                                <span class="tag">WordPress</span>
                                <span class="tag">PHP</span>
                                <span class="tag">MySQL</span>
                            </div>
                            <a href="#" class="project-link">Lihat Proyek</a>
                        </div>
                    </div>
                    
                    <!-- Proyek 4 -->
                    <div class="project-card">
                        <div class="project-image" style="background: linear-gradient(135deg, #f9c74f 0%, #f9844a 100%);">
                            Task Manager
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Aplikasi Manajemen Tugas</h3>
                            <p class="project-description">Aplikasi web untuk mengelola tugas harian dengan fitur drag & drop dan notifikasi.</p>
                            <div class="project-tags">
                                <span class="tag">Vue.js</span>
                                <span class="tag">Firebase</span>
                                <span class="tag">PWA</span>
                            </div>
                            <a href="#" class="project-link">Lihat Proyek</a>
                        </div>
                    </div>
                    
                    <!-- Proyek 5 -->
                    <div class="project-card">
                        <div class="project-image" style="background: linear-gradient(135deg, #43aa8b 0%, #277da1 100%);">
                            Weather App
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Aplikasi Cuaca</h3>
                            <p class="project-description">Aplikasi prediksi cuaca dengan tampilan visual yang menarik dan data real-time.</p>
                            <div class="project-tags">
                                <span class="tag">JavaScript</span>
                                <span class="tag">API</span>
                                <span class="tag">CSS3</span>
                            </div>
                            <a href="#" class="project-link">Lihat Proyek</a>
                        </div>
                    </div>
                    
                    <!-- Proyek 6 -->
                    <div class="project-card">
                        <div class="project-image" style="background: linear-gradient(135deg, #f3722c 0%, #f8961e 100%);">
                            Portfolio Website
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">Website Portfolio Pribadi</h3>
                            <p class="project-description">Website portfolio responsif dengan animasi smooth scroll dan form kontak yang fungsional.</p>
                            <div class="project-tags">
                                <span class="tag">HTML5</span>
                                <span class="tag">CSS3</span>
                                <span class="tag">JavaScript</span>
                            </div>
                            <a href="#" class="project-link">Lihat Proyek</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <footer>
         @include('element.footer')
    </footer>
</body>

