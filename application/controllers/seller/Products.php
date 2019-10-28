<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->database('seller',TRUE);
        $this->load->model('model_sellerLogin');
        $this->load->model('model_seller');

    }

    public function index(){
        // print_r($_SESSION); 
        if(!isset($_SESSION['admin_username'])){
            redirect('seller/dashboard/login');
        }
        $nama['admin'] = ($_SESSION['admin_nama']);
        $this->load->view('seller/header',$nama);
        
        $username = $_SESSION['admin_username'];
        $data['barang'] = $this->model_seller->getBarangSpesific($username);
        // var_dump($data);
        $this->load->view('seller/data_barang',$data);
        $this->load->view('seller/footer');
    }

    public function tambahBarang(){
        
    }

    public function ubahBarang(){
        
    }
    
    public function delete($id=null){
        if (!isset($id)) echo"gk ada id";

        if ($this->model_seller->hapusBarang($id)) {
            
            redirect('seller/products','refresh');
            
        }
        
        $this->load->view('seller/footer');
    }
    
}


?>