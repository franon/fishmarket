<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class homepage extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        var_dump($_SESSION);
        $this->load->view('header');
        $this->load->view('content');
        $this->load->view('footer');
    }

    public function detail(){
        $this->load->view('header');
        $this->load->view('detail');
        $this->load->view('footer');
    }

    public function cart(){
        $this->load->view('header-cart');
        $this->load->view('cart');
        $this->load->view('footer');
    }

}

?>