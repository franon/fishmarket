<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_fishmarket');
    }

    public function list(){
        // $this->load->view('header-transaksi',$data);
        $this->load->view('user/List');
        // $this->load->view('footer');
    }

}