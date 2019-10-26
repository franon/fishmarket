<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_sellerLogin extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->sellerdb = $this->load->database('seller',TRUE);
    }
    
    public function get($username){
        // $sellerdb = $this->load->database('seller',TRUE);
        $this->sellerdb->where('fishownerusername',$username);
        $query = $this->sellerdb->get('tfishselerregister')->result();
        return $query;

    }

    public function register($email,$fullname,$username,$password){
    
        $data = array(
            'fishownerdatejoin' => mdate('%Y-%m-%d %H-%i-%s', now()),
            'fishowneremail' => $email,
            'fishownerfullname' => $fullname,
            'fishownerusername' => $username,
            'fishownerpassword' => $password
        );
        // var_dump($this->sellerdb->set($data)->get_compiled_insert('tfishselerregister')); 
        return $this->sellerdb->insert('tfishselerregister', $data);
    }
}
?>