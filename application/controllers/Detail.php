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
            'nama' => null,
            'seller' => $this->Model_fishmarket->getDataSeller($this->Model_fishmarket->getDataIkan($kode)[0]->idfishkios)[0]
        ];
        if (empty($_SESSION['idcoin'])) {
            //tidak ada
        }else{
            $idcoin = $_SESSION['idcoin'];
            $data['saldo'] = json_decode(file_get_contents('http://localhost/Coin/api/Coin/saldo/?coin-key=co-1&id='.$idcoin))->data[0];
        }

        // var_dump($data['seller']);
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