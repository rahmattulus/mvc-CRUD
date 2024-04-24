<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                Detail Mahasiswa
            </div>
            <div class="card-body">
                <p class="card-text"><?= $data['mhs']['id_siswa']; ?></p>
                <p class="card-text"><?= $data['mhs']['tanggal_daftar']; ?></p>
                <p class="card-text"><?= $data['mhs']['kelas']; ?></p>
                <h5 class="card-title"><?= $data['mhs']['nama_lengkap']; ?></h5>
                <h5 class="card-text"><?= $data['mhs']['jenis_kelamin']; ?></h5>
                <h5 class="card-text"><?= $data['mhs']['alamat']; ?></h5>
                <p class="card-text"><?= $data['mhs']['email']; ?></p>
                <p class="card-text"><?= $data['mhs']['whatsapp']; ?></p>
            </div>
            <div class="card-footer">
                <a href="<?= BASEURL; ?>/mahasiswa/" class="btn btn-primary float-end">Kembali</a>
            </div>
        </div>
    </div>
</div>