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
    }

    public function tambahBarang(){

        $data = array(
            'admin'=>$_SESSION['admin_nama'],
            'dataKios'=>$this->model_seller->getDataKios($_SESSION['admin_username'])[0],
            'kodeikan'=>substr(($_SESSION['admin_username']),0,2).'-'.random_string('numeric',3)  
        );

        
        if(isset($_POST["submit"])){
            $idfishkios = $data['dataKios']->idfishkios;
            $fishkodeofproductsale = $data['kodeikan'];
            $fishgenericproductname = $this->input->post('fishgenericproductname');
            $fishregularprice = $this->input->post('fishregularprice');
            $fishquantity = $this->input->post('fishquantity');
            $fishnoteofproduct = $this->input->post('fishnoteofproduct');
            if($this->model_seller->tambahBarang($idfishkios,$fishkodeofproductsale,$fishgenericproductname,$fishregularprice,$fishquantity,$fishnoteofproduct) >0){
                // return redirect(base_url('seller/products'),'refresh');
                return "awa";
            }else{
                // return redirect(base_url('seller/products/tambahBarang'),'refresh');
                return "uwu";
            }

        }   
        
        $this->load->view('seller/header',$data);
        $this->load->view('seller/tambahbarang',$data);
        $this->load->view('seller/footer');
    }
    
    public function ubahBarang($id){
        
        $data = array(
        'admin'=>$_SESSION['admin_nama'],
        'dataIkan' => $this->model_seller->getDataIkan($id)[0]
        );

        var_dump($data['dataIkan']);

        if(isset($_POST["submit"])){
            $kodeIkan = $data['dataIkan']->fishkodeofproductsale;
            $namaIkan = $this->input->post('fishgenericproductname');
            $hargaIkan = $this->input->post('fishregularprice');
            $qtyIkan = $this->input->post('fishquantity');
            $tglIkan = date('Y-m-d');
            $catatanIkan = $this->input->post('fishnoteofproduct');
            $this->model_seller->ubahBarang($kodeIkan,$namaIkan,$hargaIkan,$qtyIkan,$tglIkan,$catatanIkan);
            redirect(base_url('seller/products'),'refresh');
        }

        $this->load->view('seller/header',$data);
        $this->load->view('seller/ubahBarang',$data);
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