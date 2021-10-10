<?php

class Peminjaman_model {
  
    private $table = 'tbl_pinjam_buku';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllpeminjaman() {
        $this->db->query('SELECT * FROM tbl_pinjam_buku');
        return $this->db->resultSet();
    }

    public function getAllPeminjamanById($id) {
        $this->db->query('SELECT * FROM tbl_pinjam_buku WHERE kd_pinjam=:kd_pinjam');
        $this->db->bind('kd_pinjam',$id);
        return $this->db->single();
    }

    public function tambahPeminjaman($kd_pinjam,$nama_pinjam,$nama_buku,$tgl_pinjam,$tgl_kembali) {
        $this->db->query('INSERT INTO tbl_pinjam_buku (kd_pinjam, nama_pinjam, nama_buku, tgl_pinjam, tgl_kembali) VALUES(:kd_pinjam, :nama_pinjam, :nama_buku, :tgl_pinjam, :tgl_kembali)');
        $this->db->bind('kd_pinjam',$kd_pinjam);
        $this->db->bind('nama_pinjam',$nama_pinjam);
        $this->db->bind('nama_buku',$nama_buku);
        $this->db->bind('tgl_pinjam',$tgl_pinjam);
        $this->db->bind('tgl_kembali',$tgl_kembali);
        $this->db->execute();
    }

    public function updatePeminjaman($kd_pinjam,$nama_pinjam,$nama_buku,$tgl_pinjam,$tgl_kembali) {
        $this->db->query('UPDATE tbl_pinjam_buku SET :kd_pinjam, :nama_pinjam, :nama_buku, :tgl_pinjam, :tgl_kembali WHERE kd_pinjam=:kd_pinjam');
        $this->db->bind('kd_pinjam',$kd_pinjam);
        $this->db->bind('nama_pinjam',$nama_pinjam);
        $this->db->bind('nama_buku',$nama_buku);
        $this->db->bind('tgl_pinjam',$tgl_pinjam);
        $this->db->bind('tgl_kembali',$tgl_kembali);
        $this->db->execute();
    }

    public function deletePeminjaman($id) {
        $this->db->query('DELETE FROM tbl_pinjam_buku WHERE kd_pinjam=:kd_pinjam');
        $this->db->bind('kd_pinjam',$id);
        $this->db->execute();
    }

    }
