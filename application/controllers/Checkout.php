<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_fishmarket');
    }
    
    function item(){
        //Berikut Data yang dibutuhkan untuk proses checkout tetapi TIDAK BERSIFAT array.
            $dataNonLoop = [
            'idfishowner' => $this->input->post('idfishowner');
            'idcustomer' => $_SESSION['idcustomer'],
            'namacustomer' => $_SESSION['cust_nama'],
            'idcart' => $this->input->post('idCart'),
            'subtotal' => $this->input->post('subTotal'),
            'shipping' => $this->input->post('shipping'),
            'totalharga' => $this->input->post('totalHarga')    
        ];
        //Berikut Data yang dibutuhkan untuk proses checkout tetapi BERSIFAT array.
            $dataLoop = [
            'namaproduct' => $this->input->post('namaProduct'),
            'quantity' => $this->input->post('quantity'),
            'harga' => $this->input->post('harga'),
        ];
        
        
        // var_dump($this->input->post('cart'));die;

        //proses penginputan data-data yang diperlukan dan proses checkout
        $data = [];
        foreach ($dataLoop['namaproduct'] as $key => $value) {
            $data[] = [
                'idcart' => $dataNonLoop['idcart'],
                'idcustomer' => $dataNonLoop['idcustomer'],
                'namacustomer' => $dataNonLoop['namacustomer'],
                'namaproduct' => $dataLoop['namaproduct'][$key],
                'quantity' => $dataLoop['quantity'][$key],
                'harga' => $dataLoop['harga'][$key],
                'subtotal' => $dataNonLoop['subtotal'],
                'shipping' => $dataNonLoop['shipping'], 
                'totalharga' => $dataNonLoop['totalharga'],
            ];
            $this->Model_fishmarket->checkout($data[$key]);//Proses Checkout
        }

        //Untuk meneruskan Request pemesanan kepada seller
        foreach ($this->Model_fishmarket->getDataCheckout($dataNonLoop['idcustomer']) as $key => $value) {
            $dataCheckout[] = [
                'idtransaksi' => $value->idtransaksi,
                'idcustomer' => $value->idcustomer,
                'namacustomer' => $value->namacustomer,
                'namaproduct' => $value->namaproduct,
                'quantity' => $value->quantity,
                'harga' => $value->harga,
                'subtotal' => $value->subtotal,
                'shipping' => $value->shipping ,
                'totalharga' => $value->totalharga,
            ];
            $this->Model_fishmarket->transactions($dataCheckout[$key]); //Proses pencatatan transaksi yang ditujukan kepada seller.
            
        }
        $this->Model_fishmarket->deleteCart($dataNonLoop['idcart']); //Menghapus Cart setelah Proses checkout
        redirect('','refresh');
        
        

    }

}