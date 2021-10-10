<?php

class Anggota extends Controller {

    public function index(){
        $data['title'] = 'Data Anggota';
        $data['anggota'] = $this->model('Anggota_model')->getAllanggota();
        $this->view('anggota/index', $data);
    }

    public function edit($id){
        $data['title'] = 'Detail Anggota';
        $data['anggota'] = $this->model('Anggota_model')->getAllAnggotaById($id);
        $this->view('anggota/edit', $data);
    }

    public function tambah(){
        $data['title'] = 'Tambah Anggota';  
        $data['anggota'] = $this->model('Anggota_model')->getAllanggota();	
        $this->view('anggota/tambah', $data);
    }

    public function simpan(){  
        $kd_user        = $_POST['kd_user'];
        $username       = $_POST['username'];
        $password       = $_POST['password'];
        $level          = $_POST['level'];
        $status         = $_POST['status'];
        $data['anggota'] = $this->model('Anggota_model')->tambahAnggota($kd_user,$username,$password,$level,$status);
        $data['anggota'] = $this->model('Anggota_model')->getAllanggota();
        $this->view('anggota/index', $data);
    }

    public function update(){  
        $kd_user        = $_POST['kd_user'];
        $username       = $_POST['username'];
        $password       = $_POST['password'];
        $level          = $_POST['level'];
        $status         = $_POST['status'];
        $data['anggota'] = $this->model('Anggota_model')->updateAnggota($kd_user,$username,$password,$level,$status);
        $data['anggota'] = $this->model('Anggota_model')->getAllanggota();
        $this->view('anggota/index', $data);
    }

    public function hapus($id){
        $data['anggota'] = $this->model('Anggota_model')->deleteAnggota($id);
        $data['anggota'] = $this->model('Anggota_model')->getAllanggota();
        $this->view('anggota/index', $data);
    }
}
