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
                'idcustomer' => $_SESSION['idcustomer'],
                'namacustomer' => $_SESSION['cust_nama'],
                'subtotal' => $this->input->post('subTotal'),
                'shipping' => $this->input->post('shipping'),
                'totalharga' => $this->input->post('totalHarga')    
            ];

            // var_dump($dataNonLoop['totalharga']);die;

            //Berikut Data yang dibutuhkan untuk proses checkout tetapi BERSIFAT array.
            $dataLoop = [
                'idcart' => $this->input->post('idCart'),
                'idfishowner' => $this->input->post('idfishowner'),
                'namaproduct' => $this->input->post('namaProduct'),
                'quantity' => $this->input->post('quantity'),
                'harga' => $this->input->post('harga')
            ];

        // ========================== CEK SALDO CUSTOMER ============================
                $idcustomercoin = $_SESSION['idcustomercoin'];
                $saldo = json_decode(file_get_contents('http://localhost/Coin/api/Coin/saldo/?coin-key=co-1&id='.$idcustomercoin))->data[0];
                // var_dump($saldo->balance);die;
                if ($saldo->balance < $dataNonLoop['totalharga']) {
                    $this->session->set_flashdata('notifsaldo','Saldo kamu kurang');
                    redirect('','refresh');die;
                }else{

                    $data = array(
                        'coin-key' => 'co-1',
                        'id' => $_SESSION['idcustomercoin'],
                        'bayar' => $dataNonLoop['totalharga']
                    );
            
                    // var_dump($data);die;
                    $data_string = json_encode($data);
                    $api_url = "http://localhost/Coin/api/Coin/saldo/";
                    
                    $curl = curl_init($api_url);
                    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    // curl_setopt($curl, CURLOPT_POST, true); //ini jika datanya post
                    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                        'Content-Type: application/json',
                            'Content-Length: ' . strlen($data_string))
                    );
                    $result = curl_exec($curl);
                    if(!$result){die("Connection Failure");}
                    curl_close($curl);

                    // ========PROSES PENGINPUTAN DATA-DATA YANG DIPERLUKAN DAN PROSES CHECKOUT=========
                    $data = [];
                    foreach ($dataLoop['namaproduct'] as $key => $value) {
                        $data[] = [
                            'idtransaksi' => 'trx-'.substr($dataLoop['idcart'][$key],4,3),
                            'idcart' => $dataLoop['idcart'][$key],
                            'idfishowner' => $dataLoop['idfishowner'][$key],
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
                        $this->Model_fishmarket->deleteCart($dataLoop['idcart'][$key]); //Menghapus Cart setelah Proses checkout
                    }
            
                    // ================ UNTUK MENERUSKAN REQUEST PESANAN KEPADA SELLER ===========
                    foreach ($this->Model_fishmarket->getDataCheckout($dataNonLoop['idcustomer']) as $key => $value) {
                        $dataCheckout[] = [
                            'idtransaksi' => $value->idtransaksi,
                            'idcustomer' => $value->idcustomer,
                            'idfishowner' => $value->idfishowner,
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
                    redirect('','refresh');
                }


        // =======================MENGURANGI SALDO CUSTOMER ===========================
        
        

    }

}