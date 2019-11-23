<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_fishmarket');
    }

    public function index(){
        if (isset($_SESSION['cust_username'])) {
            $data = [
                'username' => $_SESSION['cust_username'],
                'nama' => $_SESSION['cust_nama']
            ];
        }else{
            $data = [
                'username' => 'Masuk',
                'nama' => 'Masuk'
            ];
        }
        $this->load->view('header-cart',$data);
        $this->load->view('cart');
        $this->load->view('footer');
    }

    function addToCart(){
        
    }
}