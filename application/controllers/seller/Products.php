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
        $nama['admin'] = ($_SESSION['admin_nama']);
        $this->load->view('seller/header',$nama);
        
        if(isset($_POST["submit"])){
        $idfishkios = $this->input->post('idfishkios');
        $fishkodeofproductsale =$this->input->post('fishkodeofproductsale');
        $fishgenericproductname = $this->input->post('fishgenericproductname');
        $fishregularprice = $this->input->post('fishregularprice');
        $fishquantity = $this->input->post('fishquantity');
        // $fishopendateofproductPrice = $this->input->post('fishopendateofproductPrice');
        $fishnoteofproduct = $this->input->post('fishnoteofproduct');
        $this->model_seller->tambahBarang($idfishkios,$fishkodeofproductsale,$fishgenericproductname,$fishregularprice,$fishquantity,$fishnoteofproduct);
        }
        
        $this->load->view('seller/tambahbarang');
        $this->load->view('seller/footer');
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