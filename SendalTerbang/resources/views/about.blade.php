<head>
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
</head>
<body>
    <header>
        @include('element.header')
    </header>
    <main>
        <div class="Awal-header">
            <H1>ABOUT US</H1>    
        </div>
        <div class="pembatas"></div>
        <div class="about-isi">
            <H1>SENDAL TERBANG</H1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A impedit natus consequuntur assumenda harum repellendus, optio voluptate. Nisi saepe officia, ipsum esse natus, rem incidunt, optio obcaecati dolor officiis ipsa hic dolorum distinctio! Doloribus repellendus perferendis molestiae maiores molestias ipsa temporibus iusto atque, consequatur, laudantium quos! Molestias blanditiis eum veniam nihil magni dolorem maiores adipisci ipsam dolore facere dignissimos assumenda atque at ullam animi laudantium, accusamus eos, eaque repellat reprehenderit quia, voluptatem nemo exercitationem? Aspernatur nostrum tempora deserunt similique impedit sequi repellendus asperiores porro, est quos atque ipsum vel eaque quaerat! Autem suscipit minus soluta fugiat maxime quibusdam dolore cupiditate perspiciatis doloribus reprehenderit, dicta culpa cum, ipsum id esse velit quia! Dolores dolorum blanditiis consectetur, consequatur consequuntur eos molestias, veniam vitae magnam omnis ab aut soluta odio assumenda nam cumque alias labore! Sapiente blanditiis cum qui. Optio, adipisci totam nam facere voluptates, reiciendis rerum ipsum recusandae iste ad corrupti iure expedita. Magnam atque qui quidem facilis eligendi reiciendis consequuntur, pariatur porro perferendis quod sint enim minus ratione itaque blanditiis asperiores laboriosam inventore illo commodi ducimus aspernatur nisi eveniet corrupti? Accusamus porro voluptatem eos fugiat rem. Repudiandae necessitatibus consectetur nesciunt dolore possimus, voluptates earum quod, minus dolores, iusto quia perspiciatis ipsam.</p>
        </div>
         <div class="Kontak">
        <h1>Kontak Kami</h1>
        <div class="baris">
            <div class="kolom1">
                <div class="map-container">
                    <!-- Peta Google Maps -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20602.979126545!2d108.27591216825628!3d-6.408081454006322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sid!2sid!4v1759912786529!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
                </div>
            </div>
            <div class="kolom2">
                <div class="kontak-info">
                    <h2>Informasi Kontak</h2>
                    <div class="kontak-item">
                        <div class="kontak-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="kontak-detail">
                            <h3>Alamat</h3>
                            <p>Jl. Contoh No. 123, Kota Yogyakarta, DIY 55281</p>
                        </div>
                    </div>
                    <div class="kontak-item">
                        <div class="kontak-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="kontak-detail">
                            <h3>Telepon</h3>
                            <p>+62 123 4567 8900</p>
                        </div>
                    </div>
                    <div class="kontak-item">
                        <div class="kontak-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="kontak-detail">
                            <h3>Email</h3>
                            <p>info@perusahaan.com</p>
                        </div>
                    </div>
                    <div class="kontak-item">
                        <div class="kontak-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="kontak-detail">
                            <h3>Jam Operasional</h3>
                            <p>Senin - Jumat: 08.00 - 17.00 WIB<br>Sabtu: 08.00 - 12.00 WIB</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer>
        @include('element.footer')
    </footer>
</body>