<section class="project-section">
    <div class="header">
        <h2>Proyek Kamu</h2>
        <button class="btn-add">+ Tambah Proyek</button>
    </div>

    <!-- Jika belum ada proyek -->
    <!-- <div class="empty-box">Belum ada proyek yang kamu upload.</div> -->

    <div class="project-container">

        <!-- CARD PROYEK -->
        <div class="project-card">
            <h3>Aplikasi Manajemen Kelas</h3>
            <p class="category">Kategori: Sistem Informasi</p>

            <span class="status pending">Menunggu</span>
            <!-- 
                class=status:
                .pending -> kuning
                .approved -> hijau
                .rejected -> merah 
            -->

            <div class="actions">
                <button class="btn-edit">Edit</button>
                <button class="btn-delete">Hapus</button>
            </div>
        </div>

        <!-- Contoh proyek disetujui -->
        <div class="project-card">
            <h3>Website E-Learning</h3>
            <p class="category">Kategori: Web Development</p>
            <span class="status approved">Disetujui</span>

            <div class="actions">
                <button class="btn-edit">Edit</button>
                <button class="btn-delete">Hapus</button>
            </div>
        </div>

        <!-- Contoh proyek ditolak -->
        <div class="project-card">
            <h3>Aplikasi Inventaris Lab</h3>
            <p class="category">Kategori: Aplikasi Desktop</p>
            <span class="status rejected">Ditolak</span>

            <div class="actions">
                <button class="btn-edit">Edit</button>
                <button class="btn-delete">Hapus</button>
            </div>
        </div>

    </div>
</section>
<style>
    .project-section{
    padding: 20px 40px;
}

.header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.btn-add{
    background: #4C6EF5;
    border: none;
    padding: 10px 16px;
    border-radius: 8px;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
    transition: 0.2s;
}

.btn-add:hover{
    background: #3b59ca;
}

.project-container{
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
}

.project-card{
    background: #fff;
    border-radius: 12px;
    padding: 18px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: .2s;
}

.project-card:hover{
    transform: translateY(-5px);
}

.project-card h3{
    font-size: 18px;
    font-weight: 700;
}

.category{
    font-size: 14px;
    color: gray;
    margin-bottom: 8px;
}

.status{
    display: inline-block;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 10px;
}

/* WARNA STATUS */
.pending{
    background: #ffec99;
    color: #b88600;
}
.approved{
    background: #b2f2bb;
    color: #2b8a3e;
}
.rejected{
    background: #ffa8a8;
    color: #c92a2a;
}

.actions{
    display: flex;
    justify-content: flex-end;
    gap: 8px;
    margin-top: 10px;
}

.btn-edit, .btn-delete{
    padding: 6px 10px;
    border: none;
    font-size: 13px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
}

.btn-edit{
    background: #4dabf7;
    color: white;
}
.btn-delete{
    background: #fa5252;
    color: white;
}
.empty-box{
    padding: 25px;
    background: #f8f9fa;
    border-radius: 12px;
    color: #6c757d;
}

</style>