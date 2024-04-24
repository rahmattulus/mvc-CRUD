<div class="container">
    <div class="col-lg-6">
        <?php Flasher::flash() ?>
    </div>

    <div class="row mb-3 mt-3">
        <div class="col">
            <div class="input-group mb-3">
                <form action="mahasiswa/cari" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Mahasiswa.." name="keyword" id="keyword" autocomplete="off">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#exampleModal">+ Tambah Data</button>
        </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="mahasiswa/tambah/" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="recipient-name" class="col-form-label">ID Siswa :</label>
                                <input type="text" name="id_siswa" id="id_siswa" class="form-control" id="recipient-name">
                            </div>
                            <div class="col">
                                <label for="recipient-name" class="col-form-label">Tanggal Daftar :</label>
                                <input type="date" name="tanggal_daftar" id="tanggal_daftar" class="form-control" id="recipient-name">
                            </div>
                            <div class="col">
                                <label for="recipient-name" class="col-form-label">Kelas :</label>
                                <input type="text" name="kelas" id="kelas" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama Lengkap :</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Jenis Kelamin :</label>
                            <select class="custom-select" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Alamat:</label>
                            <textarea class="form-control" name="alamat" id="alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email :</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Whatsapp :</label>
                            <input type="text" name="whatsapp" class="form-control" id="whatsapp">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6">
            <ul class="list-grup">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">
                                <?= $mhs['nama_lengkap']; ?>
                            </div>
                            <div class="col">
                                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id_siswa']; ?>" class="btn btn-info float-end me-1">Detail</a>
                                <button class="btn btn-success tampilModalUbah float-end me-1" data-toggle="modal" data-target="#exampleModal" data-id="<?= $mhs['id_siswa']; ?>">Update</button>
                                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id_siswa']; ?>" class="btn btn-danger float-end me-1" onclick="return confirm('Yakin ingin menghapus DATA INI ??')">Hapus</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>