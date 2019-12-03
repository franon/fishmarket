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
        var_dump($username);
        $data = [
            'admin' => $_SESSION['admin_nama'],
            'barang' => $this->model_seller->getBarangSpesific($username)
        ];
        $this->load->view('seller/header',$data);
        $this->load->view('seller/data_barang',$data);
        $this->load->view('seller/footer');
        // if (isset($_SESSION['statusTambahBarang'])) {
        //     print_r($this->test_tambahBarang());
        // }
        // var_dump($_SESSION);
        return $data['barang'];
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
            $status = '';
            if($this->model_seller->tambahBarang($idfishkios,$fishkodeofproductsale,$fishgenericproductname,$fishregularprice,$fishquantity,$fishnoteofproduct) >0){
                $_SESSION['statusTambahBarang'] = 'OK';
                $this->session->mark_as_temp('statusTambahBarang', 3);
                return redirect(base_url('seller/products'),'refresh');
            }else{
                redirect(base_url('seller/products/tambahBarang'),'refresh');
                return site_url('seller/products/tambahBarang');
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

    // public function test_index(){
    //     $test = $this->index();
    //     $expected_result = 'is_array';
    //     $test_name = 'Menampilkan Data Product yang dijual Seller';
    //     echo $this->unit->run($test,$expected_result,$test_name);
    //     // full report
    //     // echo $this->unit->report($test,$expected_result,$test_name);
    // }

    // public function test_tambahBarang(){
    //     $test = $_SESSION['statusTambahBarang'];
    //     // $expected_result = 'http://[::1]/fishmarket/seller/products';
    //     $expected_result = 'OK';
    //     $test_name = "Seller Menjual barang";
    //     return $this->unit->run($test,$expected_result,$test_name);
    // }
}