<?php

class Peminjaman extends Controller {

    public function index(){
        $data['title'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllpeminjaman();
        $this->view('peminjaman/index', $data);
    }

        public function edit($id){
        $data['title'] = 'Detail Peminjaman';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjamanById($id);
        $this->view('peminjaman/edit', $data);
    }

    public function tambah(){
        $data['title'] = 'Tambah Peminjaman'; 	 
        $this->view('peminjaman/tambah', $data);
    }

    public function simpan(){  
        $kd_pinjam          = $_POST['kd_pinjam'];
        $nama_pinjam        = $_POST['nama_pinjam'];
        $nama_buku          = $_POST['nama_buku'];
        $tgl_pinjam         = $_POST['tgl_pinjam'];
        $tgl_kembali        = $_POST['tgl_kembali'];
        $data['peminjaman'] = $this->model('Peminjaman_model')->tambahPeminjaman($kd_pinjam,$nama_pinjam,$nama_buku,$tgl_pinjam,$tgl_kembali);
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllpeminjaman();
        $this->view('peminjaman/index', $data);
    }
    
    public function update(){  
        $kd_pinjam          = $_POST['kd_pinjam'];
        $nama_pinjam        = $_POST['nama_pinjam'];
        $nama_buku          = $_POST['nama_buku'];
        $tgl_pinjam         = $_POST['tgl_pinjam'];
        $tgl_kembali        = $_POST['tgl_kembali'];
        $data['peminjaman'] = $this->model('Peminjaman_model')->updatePeminjaman($kd_pinjam,$nama_pinjam,$nama_buku,$tgl_pinjam,$tgl_kembali);
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllpeminjaman();
        $this->view('peminjaman/index', $data);
    }

    public function hapus($id){
        $data['peminjaman'] = $this->model('Peminjaman_model')->deletePeminjaman($id);
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllpeminjaman();
        $this->view('peminjaman/index', $data);
    }
}
