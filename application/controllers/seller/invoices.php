<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Invoices extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->database('seller',TRUE);
        $this->load->model('model_sellerLogin');
        $this->load->model('model_seller');

    }

    public function index(){
        $dataSeller = $this->model_seller->getDataKios($_SESSION['admin_username'])[0];
        $data = [
            'idInvoices' => $this->model_seller->getIDInvoices($dataSeller->idfishowner),
            'admin' => $_SESSION['admin_username']
        ];

        $this->load->view('seller/header',$data);
        $this->load->view('seller/invoices/content',$data);
        $this->load->view('seller/footer',$data);
    }

    public function detailInvoices($idtransaksi){
        $data = [
            'dataInvoices' => $this->model_seller->getInvoices($idtransaksi),
            'admin' => $_SESSION['admin_nama']
        ];
        // print_r(($data['idInvoices']));die;
        $this->load->view('seller/header',$data);
        $this->load->view('seller/invoices/kirimbarang',$data);
        $this->load->view('seller/footer',$data);
    }

    public function kirimBarang($idtransaksi){
        //kirim nama seller, nama customer, alamat asli, alamat tujuan, harga shipping.
        // $data = [
            
        // ];
        // echo $idtransaksi;
        redirect('seller/dashboard','refresh');
        
    }
}