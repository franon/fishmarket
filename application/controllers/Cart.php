<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_fishmarket');
    }

    public function index(){

        $data = [
            'username' => null,
            'nama' => null,
            'dataCart' => $this->Model_fishmarket->getDataCart($_SESSION['idcustomer']),
            // 'dataSeller' => $this->Model_fishmarket->getDataSeller($this->Model_fishmarket->getDataIkan($kode)[0]->idfishkios)[0]->idfishowner
        ];
        // var_dump($data['dataCart']);
        if (isset($_SESSION['cust_username'])) {
            $data['username'] = $_SESSION['cust_username'];
            $data['nama'] = $_SESSION['cust_nama'];}
            else{
            $data['username'] = 'Masuk';
            $data['nama'] = 'Masuk';
        }
        

        
        $this->load->view('header-cart',$data);
        $this->load->view('cart',$data);
        $this->load->view('footer');
    }

    function addToCart($kode){
        $dataUmum = [
            'dataIkan' => $this->Model_fishmarket->getDataIkan($kode)[0],
            'idCustomer' => $_SESSION['idcustomer'],
            'dataCart' => $this->Model_fishmarket->getDataCart($_SESSION['idcustomer'])[0],
            'dataSeller' => $this->Model_fishmarket->getDataSeller($this->Model_fishmarket->getDataIkan($kode)[0]->idfishkios)[0]->idfishowner
        ];
        if(($dataUmum['idCustomer'] == $dataUmum['dataCart']->idcustomer)){
         $query = $dataUmum['dataCart'];
         $idCart = $query->idcart;
        }else{
            $idCart = 'crt'.'-'.random_string('numeric',3);
        }
        $data = [
            'idcart' => $idCart,
            'idfishowner' => $dataUmum['dataSeller'],
            'idcustomer' => $dataUmum['idCustomer'],
            'namaproduct' => $dataUmum['dataIkan']->fishgenericproductname,
            'quantity' => 1,
            'harga' => $dataUmum['dataIkan']->fishregularprice
        ];

        $this->Model_fishmarket->insertCart($data);
        
        redirect('','refresh');
        
    }
}