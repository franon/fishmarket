<?php

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_view extends REST_Controller{

    function __construct(){
        parent::__construct();
        $this->load->database('seller',TRUE);
        $this->load->model('model_sellerLogin');
        $this->load->model('model_seller');
    }

    public function updateItem(){
        $this->load->view('header');
        $this->load->view('content');
        $this->load->view('footer');
    }
    
}