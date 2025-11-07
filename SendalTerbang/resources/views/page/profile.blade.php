<style>
.profile-card {
    max-width: 600px; margin: 50px auto; background: #fff;
    border-radius: 15px; padding: 30px;
    box-shadow: 0 4px 25px rgba(0,0,0,0.1);
}
.profile-avatar {
    width: 110px; height: 110px; border-radius: 50%;
    object-fit: cover; border: 4px solid #007bff;
}
.btn-edit{background:#007bff;color:#fff;}
.btn-edit:hover{background:#0056b3;}
</style>

<div class="profile-card text-center">

    <img class="profile-avatar mb-3"
         src="{{ asset('image/profile-default.png') }}"
         alt="Avatar">

    <h3>{{ ucfirst(Auth::user()->username) }}</h3>
    <small class="text-muted">{{ ucfirst(Auth::user()->email) }}</small>

    <hr>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 text-start">
            <label class="form-label fw-bold">Nama</label>
            <input type="text" name="name" class="form-control"
                   value="{{ ucfirst(Auth::user()->username) }}" required>
        </div>

        <div class="mb-3 text-start">
            <label class="form-label fw-bold">Foto Profil</label>
            <input type="file" name="avatar" class="form-control">
            <small class="text-muted">Format: jpg, png. Max: 2MB</small>
        </div>

        <button class="btn btn-edit w-100 mb-2">
            <i class="bi bi-save"></i> Update Profil
        </button>

        <a href="{{ url('/') }}" class="btn btn-secondary w-100">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </form>
</div>
