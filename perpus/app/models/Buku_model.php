<?php

class Buku_model {
  
    private $table = 'tbl_buku';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllbuku() {
        $this->db->query('SELECT * FROM tbl_buku');
        return $this->db->resultSet();
    }

    public function getAllBukuById($id) {
        $this->db->query('SELECT * FROM tbl_buku WHERE kd_buku=:kd_buku');
        $this->db->bind('kd_buku',$id);
        return $this->db->single();
    }

    public function tambahBuku($kd_buku, $judul, $pengarang, $penerbit, $lokasi, $stok) {
        $this->db->query('INSERT INTO tbl_buku (kd_buku, judul, pengarang, penerbit, lokasi, stok) VALUES(:kd_buku, :judul, :pengarang, :penerbit, :lokasi, :stok)');
        $this->db->bind('kd_buku',$kd_buku);
        $this->db->bind('judul',$judul);
        $this->db->bind('pengarang',$pengarang);
        $this->db->bind('penerbit',$penerbit);
        $this->db->bind('lokasi',$lokasi);
        $this->db->bind('stok',$stok);
        $this->db->execute();
    }

    public function updateBuku($kd_buku, $judul, $pengarang, $penerbit, $lokasi, $stok) {
        $this->db->query('UPDATE tbl_buku SET kd_buku=:kd_buku, judul=:judul, pengarang=:pengarang, penerbit=:penerbit, lokasi=:lokasi, stok=:stok WHERE kd_buku=:kd_buku');
        $this->db->bind('kd_buku',$kd_buku);
        $this->db->bind('judul',$judul);
        $this->db->bind('pengarang',$pengarang);
        $this->db->bind('penerbit',$penerbit);
        $this->db->bind('lokasi',$lokasi);
        $this->db->bind('stok',$stok);
        $this->db->execute();
    }

    public function deleteBuku($id) {
        $this->db->query('DELETE FROM tbl_buku WHERE kd_buku=:kd_buku');
        $this->db->bind('kd_buku',$id);
        $this->db->execute();
    }

    }
