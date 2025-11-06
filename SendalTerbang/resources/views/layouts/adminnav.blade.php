<div class="admin-nav">
    <h1 class="admin-header">Admin Page</h1>
    
    <ul>
        <a class="<?= $part == 'dashboard' ? 'active' : '' ?>" href="/admin-dashboard"><li><i class="bi bi-house-door"></i>  Dashboard</li></a>
        <a class="<?= $part == 'kelolaAkun' ? 'active' : '' ?>" href="/admin-kelolaAkun"><li><i class="bi bi-person-circle"></i>  Kelola Akun</li></a>
        <a class="<?= $part == 'kelolaProyek' ? 'active' : '' ?>" href="/admin-kelola-proyek"><li><i class="bi bi-clipboard2-pulse"></i>  Kelola Proyek</li></a>
        <a class="<?= $part == 'vertifikasi' ? 'active' : '' ?>" href="/admin-vertifikasi"><li><i class="bi bi-clipboard-check"></i>  Vertifikasi Proyek</li></a>
        <a class="<?= $part == 'kelolaDanPenilaian' ? 'active' : '' ?>" href="/admin-kelolaDanPenilaian"><li><i class="bi bi-graph-up"></i>  Kelola dan Penilaian</li></a>
    </ul>
    
    <ul>
        <a href="https://chatgpt.com/"><li><i class="bi bi-question-circle"></i>   bantuan</li></a>
        <a href="/"><li><i class="bi bi-box-arrow-right"></i>  Keluar</li></a>
    </ul>
</div>
<!-- Sidebar Admin -->
<div class="flex">
  <!-- Sidebar -->
  <aside class="w-64 bg-gray-900 text-gray-100 h-screen flex flex-col justify-between shadow-lg">
    <div>
      <!-- Logo -->
      <div class="flex items-center gap-2 p-4 border-b border-gray-700">
        <img src="{{ asset('image/logo.png') }}" alt="Logo" width="50" height="50" class="me-3">
        <h1 class="text-xl font-semibold tracking-wide">RepoAdmin</h1>
      </div>

      <!-- Menu utama -->
      <nav class="mt-4 space-y-1">
        <a href="/admin-dashboard"
           class="flex items-center gap-3 px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition rounded-md <?= $part == 'dashboard' ? 'bg-gray-800 text-white' : '' ?>">
          <i class="bi bi-house-door"></i>
          <span>Dashboard</span>
        </a>

        <a href="/admin-kelolaAkun"
           class="flex items-center gap-3 px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition rounded-md <?= $part == 'kelola akun' ? 'bg-gray-800 text-white' : '' ?>">
          <i class="bi bi-person-circle"></i>
          <span>Kelola Akun</span>
        </a>

        <a href="/admin-kelola-proyek"
           class="flex items-center gap-3 px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition rounded-md <?= $part == 'kelola proyek' ? 'bg-gray-800 text-white' : '' ?>">
          <i class="bi bi-clipboard2-pulse"></i>
          <span>Kelola Proyek</span>
        </a>

        <a href="/admin-vertifikasi"
           class="flex items-center gap-3 px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition rounded-md <?= $part == 'vertifikasi' ? 'bg-gray-800 text-white' : '' ?>">
          <i class="bi bi-clipboard-check"></i>
          <span>Verifikasi Proyek</span>
        </a>

        <a href="/admin-kelolaDanPenilaian"
           class="flex items-center gap-3 px-4 py-2 text-gray-300 hover:bg-gray-800 hover:text-white transition rounded-md <?= $part == 'kelolaDanPenilaian' ? 'bg-gray-800 text-white' : '' ?>">
          <i class="bi bi-graph-up"></i>
          <span>Penilaian & Statistik</span>
        </a>
      </nav>
    </div>

    <!-- Footer -->
    <div class="p-4 border-t border-gray-700 space-y-2">
      <a href="https://chatgpt.com/" class="flex items-center gap-3 px-2 py-2 text-gray-400 hover:text-white hover:bg-gray-800 rounded-md transition">
        <i class="bi bi-question-circle"></i> <span>Bantuan</span>
      </a>
      <a href="{{ route('logout') }}" class="flex items-center gap-3 px-2 py-2 text-red-400 hover:text-white hover:bg-red-600 rounded-md transition">
        <i class="bi bi-box-arrow-right"></i> <span>Keluar</span>
      </a>
    </div>
  </aside>

  <!-- Konten utama -->
  <main class="flex-1 bg-gray-50 p-6">
    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Selamat Datang, Admin</h1>
    <p class="text-gray-600">Silakan kelola data repository proyek kampus di sini.</p>
  </main>
</div>

<!-- Tambahkan CDN Tailwind & Bootstrap Icons -->
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
