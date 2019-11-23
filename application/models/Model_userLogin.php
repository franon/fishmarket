<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_userLogin extends CI_Model {
    
    // public function get($username){
    //     $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
    //     $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
    //     return $result;

    public function get($username){
        $this->db->where('username',$username);
        return $this->db->get('tcustomer')->result()[0];
    }

    public function history($data){
        return $this->db->insert('thistory',$data);
    }

    public function register($data){
        return $this->db->insert('tcustomer',$data);
    }

    }
