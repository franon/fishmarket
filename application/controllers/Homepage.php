<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class homepage extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_fishmarket');
    }

    public function index(){
        var_dump($_SESSION);

        $item = [
            'item' => $this->Model_fishmarket->getDataIkan()
        ];
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

        $this->load->view('header',$data);
        $this->load->view('content',$item);
        $this->load->view('footer');
    }

    public function detail(){
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
        $this->load->view('header',$data);
        $this->load->view('detail');
        $this->load->view('footer');
    }

    public function cart(){
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

}

?>