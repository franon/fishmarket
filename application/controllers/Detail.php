<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_fishmarket');
    }

    public function index(){
        
        $this->load->view('header',$data);
        $this->load->view('detail',$item);
        $this->load->view('footer');
    }

    function item($kode){
        $data = [
            'ikan' => $this->Model_fishmarket->getDataIkan($kode)[0],
            'username' => null,
            'nama' => null
        ];
        if (isset($_SESSION['cust_username'])) {
            $data['username'] = $_SESSION['cust_username'];
            $data['nama'] = $_SESSION['cust_nama'];
        }else{
            $data['username'] = "Masuk";
            $data['nama'] = 'Masuk';
        }
        $this->load->view('header',$data);
        $this->load->view('detail',$data);
        $this->load->view('footer');
    }


}