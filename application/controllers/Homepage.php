<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class homepage extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_fishmarket');
    }

    public function index(){
        //jika tidak ada ID COIN, maka akan dipersilahkan untuk login
        if (empty($_SESSION['idcoin'])) {
            $data = [
            'item' => $this->Model_fishmarket->getDataIkan(),
            'saldo' => 'u must Login'
        ];
        }else{
            $idcoin = $_SESSION['idcoin'];
            $data = [
            'item' => $this->Model_fishmarket->getDataIkan(),
            'saldo' => json_decode(file_get_contents('http://localhost/Coin/api/Coin/saldo/?coin-key=co-1&id='.$idcoin))->data[0]
        ];
        }
        if (isset($_SESSION['cust_username'])) {
            $data['username'] = $_SESSION['cust_username'];
            $data['nama'] = $_SESSION['cust_nama'];
        }else{
            $data['username'] = 'masuk';
            $data['nama'] = 'masuk';
        }

        $this->load->view('header',$data);
        $this->load->view('content',$data);
        $this->load->view('footer');
    }

    // public function topUpSaldo(){
    //     //jika tidak ada ID COIN, maka akan dipersilahkan untuk login
    //     if (empty($_SESSION['idcoin'])) {
    //         $data = [
    //         'item' => $this->Model_fishmarket->getDataIkan()
    //     ];
    //     }else{
    //         $idcoin = $_SESSION['idcoin'];
    //         $data = [
    //         'item' => $this->Model_fishmarket->getDataIkan(),
    //         'saldo' => json_decode(file_get_contents('http://localhost/Coin/api/Coin/saldo/?coin-key=co-1&id='.$idcoin))->data[0]
    //     ];
    //     }
    //     if (isset($_SESSION['cust_username'])) {
    //         $data['username'] = $_SESSION['cust_username'];
    //         $data['nama'] = $_SESSION['cust_nama'];
    //     }else{
    //         $data['username'] = 'masuk';
    //         $data['nama'] = 'masuk';
    //     }

    //     $this->load->view('header',$data);
    //     $this->load->view('topup');
    //     $this->load->view('footer');
    // }

    // public function topUpSaldo(){
    //     var_dump($_SESSION);die;
    //     $data = [
    //         'coin-key' => 'co-1',
    //         'id' => $_SESSION['idcoin'],
    //         // 'topUp' => $this->input->post('topup')
    //         'topUp' => 20000
    //     ];
    //     $data_string = json_encode($data);
    //     $api_url = "http://localhost/Coin/api/Coin/topUpSaldo/";

    //     $curl = curl_init($api_url);
        
    //     curl_setopt($curl, CURLOPT_POST,true);
    //     curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    //     curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);

    //     // curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    //     // curl_setopt($curl, CURLOPT_HEADER,[
    //     //     'Content-Type: application/json',
    //     //     'Content-Length: ' . strlen($data_string)
    //     // ]);

    //     // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // Make it so the data coming back is put into a string
    //     // curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);  // Insert the data
    //     // curl_setopt($curl,CURLOPT_PUT)

    //     $result = curl_exec($curl);
    //     curl_close($curl);

    //     echo $result;

    // }


}

?>