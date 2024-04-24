<?php

class Mahasiswa_model
{
    private $table = 'tbl_siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_siswa =:id_siswa');
        $this->db->bind('id_siswa', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                    VALUES
                  (:id_siswa, :tanggal_daftar, :kelas, :nama_lengkap, :jenis_kelamin, :alamat, :email, :whatsapp)";

        $this->db->query($query);
        $this->db->bind('id_siswa', $data['id_siswa']);
        $this->db->bind('tanggal_daftar', $data['tanggal_daftar']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('whatsapp', $data['whatsapp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_siswa = :id_siswa";

        $this->db->query($query);
        $this->db->bind('id_siswa', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE " . $this->table . " SET

                id_siswa = :id_siswa,
                tanggal_daftar = :tanggal_daftar,
                kelas = :kelas,
                nama_lengkap = :nama_lengkap,
                jenis_kelamin = :jenis_kelamin,
                alamat = :alamat,
                email = :email,
                whatsapp = :whatsapp 
                WHERE id_siswa = :id_siswa";

        $this->db->query($query);
        $this->db->bind('id_siswa', $data['id_siswa']);
        $this->db->bind('tanggal_daftar', $data['tanggal_daftar']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('whatsapp', $data['whatsapp']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE nama_lengkap LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
