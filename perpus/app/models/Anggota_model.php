<?php

class Anggota_model {
  
    private $table = 'tbl_user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllanggota() {
        $this->db->query('SELECT * FROM tbl_user');
        return $this->db->resultSet();
    }

    public function getAllAnggotaById($id) {
        $this->db->query('SELECT * FROM tbl_user WHERE kd_user=:kd_user');
        $this->db->bind('kd_user',$id);
        return $this->db->single();
    }

    public function tambahAnggota($kd_user, $username, $password, $level, $status) {
        $this->db->query('INSERT INTO tbl_user (kd_user, username, password, level, status) VALUES(:kd_user, :username, :password, :level, :status)');
        $this->db->bind('kd_user',$kd_user);
        $this->db->bind('username',$username);
        $this->db->bind('password',$password);
        $this->db->bind('level',$level);
        $this->db->bind('status',$status);
        $this->db->execute();
    }

    public function updateAnggota($kd_user, $username, $password, $level, $status) {
        $this->db->query('UPDATE tbl_user SET kd_user=:kd_user, username=:username, password=:password, level=:level, status=:status WHERE kd_user=:kd_user');
        $this->db->bind('kd_user',$kd_user);
        $this->db->bind('username',$username);
        $this->db->bind('password',$password);
        $this->db->bind('level',$level);
        $this->db->bind('status',$status);
        $this->db->execute();
    }

    public function deleteAnggota($id) {
        $this->db->query('DELETE FROM tbl_user WHERE kd_user=:kd_user');
        $this->db->bind('kd_user',$id);
        $this->db->execute();
    }

    }
