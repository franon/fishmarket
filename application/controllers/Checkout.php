<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_fishmarket');
    }

    function item(){
        
        // $data = [
        //     'kodetransaksi' => 'trx-'.random_string('numeric',3)
        // ];
        
        $data = [
            'idcart' => $this->input->post('idCart'),
            'namaproduct' => $this->input->post('namaProduct'),
            'quantity' => $this->input->post('quantity'),
            'harga' => $this->input->post('harga'),
            'subtotal' => $this->input->post('subTotal'),
            'shipping' => $this->input->post('shipping'),
            'totalharga' => $this->input->post('totalHarga')
            ];
        var_dump($data['quantity']);
        foreach ($data['namaproduct'] as $nmProduct) {
        }


        // $userItemonCart = $this->Model_fishmarket->getCart($idcart);
    }

}