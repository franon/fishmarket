<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller{

    public function __construct(){
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

        $data = array(
            'admin'=>$_SESSION['admin_nama'],
            'dataKios'=>$this->model_seller->getDataKios($_SESSION['admin_username'])[0],
            'kodeikan'=>substr(($_SESSION['admin_username']),0,2).'-'.random_string('numeric',3)  
        );

        $this->load->view('seller/header',$data);
        
        if(isset($_POST["submit"])){
            $idfishkios = $data['dataKios']->idfishkios;
            // $fishkodeofproductsale = $this->input->post('fishkodeofproductsale');
            $fishkodeofproductsale = $data['kodeikan'];
            $fishgenericproductname = $this->input->post('fishgenericproductname');
            $fishregularprice = $this->input->post('fishregularprice');
            $fishquantity = $this->input->post('fishquantity');
            // $fishopendateofproductPrice = $this->input->post('fishopendateofproductPrice');
            $fishnoteofproduct = $this->input->post('fishnoteofproduct');
            $this->model_seller->tambahBarang($idfishkios,$fishkodeofproductsale,$fishgenericproductname,$fishregularprice,$fishquantity,$fishnoteofproduct);
            redirect(base_url('seller/products'),'refresh');
        }   
        
        $this->load->view('seller/tambahbarang',$data);
        $this->load->view('seller/footer');
    }
    
    public function ubahBarang($id){
        
        $data = array(
        'admin'=>$_SESSION['admin_nama'],
        'dataIkan' => $this->model_seller->getDataIkan($id)[0]
        );

        $this->load->view('seller/header',$data);
        $this->load->view('seller/ubahBarang',$data);
        var_dump($data['dataIkan']);
        $this->load->view('seller/footer');
        
        
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