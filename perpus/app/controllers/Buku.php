<?php

class Buku extends Controller {

    public function index(){
        $data['title'] = 'Data Buku';
        $data['buku'] = $this->model('Buku_model')->getAllbuku();
        $this->view('buku/index', $data);
    }
    
    public function edit($id){
        $data['title'] = 'Detail Buku';
        $data['buku'] = $this->model('Buku_model')->getAllBukuById($id);
        $this->view('buku/edit', $data);
    }
    
    public function tambah(){
        $data['title'] = 'Tambah Buku';  
        $this->view('buku/tambah', $data);
    }

    public function simpan(){  
        $kd_buku                    = $_POST['kd_buku'];
        $judul                      = $_POST['judul'];
        $pengarang                  = $_POST['pengarang'];
        $penerbit                   = $_POST['penerbit'];
        $lokasi                     = $_POST['lokasi'];
        $stok                       = $_POST['stok'];
        $data['buku'] = $this->model('Buku_model')->tambahBuku($kd_buku, $judul, $pengarang, $penerbit, $lokasi, $stok);
        $data['buku'] = $this->model('Buku_model')->getAllbuku();
        $this->view('buku/index', $data);
    }

    public function update(){  
        $kd_buku                    = $_POST['kd_buku'];
        $judul                      = $_POST['judul'];
        $pengarang                  = $_POST['pengarang'];
        $penerbit                   = $_POST['penerbit'];
        $lokasi                     = $_POST['lokasi'];
        $stok                       = $_POST['stok'];
        $data['buku'] = $this->model('Buku_model')->updateBuku($kd_buku, $judul, $pengarang, $penerbit, $lokasi, $stok);
        $data['buku'] = $this->model('Buku_model')->getAllbuku();
        $this->view('buku/index', $data);
    }

    public function hapus($id){
        $data['buku'] = $this->model('Buku_model')->deleteBuku($id);
        $data['buku'] = $this->model('Buku_model')->getAllbuku();
        $this->view('buku/index', $data);
    }
}
