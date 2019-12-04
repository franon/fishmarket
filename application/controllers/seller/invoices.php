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
            'dataInvoices' => $this->model_seller->getInvoices($dataSeller->idfishowner),
            // 'dataInvoices' => $this->model_seller->getSpesificInvoices(),
            'idInvoices' => $this->model_seller->getIDInvoices($dataSeller->idfishowner)
        ];
        // print_r(($data['idInvoices']));die;
        $this->load->view('seller/header');
        $this->load->view('seller/invoices/content',$data);
        $this->load->view('seller/footer',$data);
    }

    public function kirimBarang($idtransaksi){

    }
}