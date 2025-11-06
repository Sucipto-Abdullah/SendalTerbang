<!-- FOOTER -->
<footer class="footer text-white pt-5 pb-4">
  <div class="container text-md-left">
    <div class="row text-md-left">

      <!-- Logo & Identitas -->
      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
        <div class="d-flex align-items-center mb-3">
          <img src="{{ asset('image/logo.png') }}" alt="Logo Polindra" width="55" height="55" class="me-2">
          <h5 class="fw-semibold mb-0 text-uppercase">Politeknik Negeri Indramayu</h5>
        </div>
        <p class="small">
          Jl. Raya Lohbener Lama No.08, Lohbener, Indramayu 45252, Jawa Barat<br>
          <strong>Telepon:</strong> (0234) 5746464<br>
          <strong>Email:</strong> info@polindra.ac.id
        </p>
      </div>

      <!-- Link Navigasi -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase fw-bold mb-4">Navigasi</h6>
        <p><a href="{{ url('/') }}" class="text-white text-decoration-none">Beranda</a></p>
        <p><a href="{{ url('/about') }}" class="text-white text-decoration-none">Tentang Kami</a></p>
        <p><a href="{{ url('/repository') }}" class="text-white text-decoration-none">Repository</a></p>
        <p><a href="{{ url('/contact') }}" class="text-white text-decoration-none">Kontak</a></p>
      </div>

      <!-- Maps -->
      <div class="col-md-5 col-lg-4 col-xl-4 mx-auto mt-3">
        <h6 class="text-uppercase fw-bold mb-4">Lokasi Kampus</h6>
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.88809076707!2d108.28145169999999!3d-6.4084147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sid!2sid!4v1761525407903!5m2!1sid!2sid" 
          width="100%" 
          height="200" 
          style="border:0; border-radius:10px;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

    </div>

    <hr class="mt-4 mb-3 text-white opacity-50">

    <!-- Copyright -->
    <div class="text-center">
      <p class="mb-0 small">
        © {{ date('Y') }} <strong>Politeknik Negeri Indramayu</strong> — All Rights Reserved.
      </p>
    </div>
  </div>
</footer>

<!-- CUSTOM STYLE -->
<style>
  .footer {
    background: linear-gradient(90deg, #002f6c, #005bb5);
  }

  .footer h6 {
    letter-spacing: 1px;
  }

  .footer a:hover {
    text-decoration: underline;
  }

  @media (max-width: 768px) {
    .footer {
      text-align: center;
    }
  }
</style>
