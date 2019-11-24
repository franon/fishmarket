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
            'dataCart' => $this->Model_fishmarket->getDataCart($_SESSION['idcustomer'])
        ];
        if (isset($_SESSION['cust_username'])) {
            $data['username'] = $_SESSION['cust_username'];
            $data['nama'] = $_SESSION['cust_nama'];
        }else{
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
            'dataCart' => $this->Model_fishmarket->getDataCart()[0]

        ];

        if ($dataUmum['idCustomer'] == $dataUmum['dataCart']->idcustomer) {
         $query = $this->Model_fishmarket->getDataCart($dataUmum['idCustomer'])[0];
         $idCart = $query->idcart;
        }else{
            $idCart = 'crt'.'-'.random_string('numeric',3);
        }

        $data = [
            'idcart' => $idCart,
            'idcustomer' => $dataUmum['idCustomer'],
            'namaproduct' => $dataUmum['dataIkan']->fishgenericproductname,
            'quantity' => 1,
            'harga' => $dataUmum['dataIkan']->fishregularprice
        ];

        $this->Model_fishmarket->insertCart($data);
    }
}