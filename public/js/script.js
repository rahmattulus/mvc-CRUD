$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_lengkap').val('');
        $('#jenis_kelamin').val('');
        $('#email').val('');
        $('#kelas').val('');
        $('#id_siswa').val('');
        $('#tanggal_daftar').val('');
        $('#alamat').val('');
        $('#whatsapp').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/boilerplatemvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/boilerplatemvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                // $('#nama').val(data.nama);
                $('#nama_lengkap').val(data.nama_lengkap);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#email').val(data.email);
                $('#kelas').val(data.kelas);
                $('#id_siswa').val(data.id_siswa);
                $('#tanggal_daftar').val(data.tanggal_daftar);
                $('#alamat').val(data.alamat);
                $('#whatsapp').val(data.whatsapp);
            }
        });
        
    });

});