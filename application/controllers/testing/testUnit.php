<?php


defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class testUnit extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database('seller',TRUE);
        $this->load->model('model_sellerLogin');
        $this->load->model('model_seller');
    }

    public function index(){
        $products = new Products();
        $product->index();
        echo "Halaman Testing";
    }

    public function productIndex(){
        $username = $_SESSION['admin_username'];
        if(!isset($username)){
            redirect('seller/dashboard/login');
        }
        $data = [
            'admin' => $_SESSION['admin_nama'],
            'barang' => $this->model_seller->getBarangSpesific($username)
        ];
        $this->load->view('seller/header',$data);
        $this->load->view('seller/data_barang',$data);
        $this->load->view('seller/footer');
        return $data['barang'];
    }

    public function test_productIndex(){
        echo "Using unit testing library <br>";
        $test = $this->productIndex();
        $expected_result = 'is_array';
        $test_name = 'Menampilkan Data Product yang dijual Seller';
        echo $this->unit->run($test,$expected_result,$test_name);
        // full report
        // echo $this->unit->report($test,$expected_result,$test_name);
    }

}

    
    
    
