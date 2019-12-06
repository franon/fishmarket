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
            'dataCart' => $this->Model_fishmarket->getDataCart($_SESSION['idcustomer']),
            // 'dataSeller' => $this->Model_fishmarket->getDataSeller($this->Model_fishmarket->getDataIkan($kode)[0]->idfishkios)[0]->idfishowner
        ];

        if (isset($_SESSION['cust_username'])) {
            $data['username'] = $_SESSION['cust_username'];
            $data['nama'] = $_SESSION['cust_nama'];}
            else{
                redirect('users/login','refresh');
        }
        
        if (empty($_SESSION['idcustomercoin'])) {
            
        }else{
            $idcustomercoin = $_SESSION['idcustomercoin'];
            $data['saldo'] = json_decode(file_get_contents('http://localhost/Coin/api/Coin/saldo/?coin-key=co-1&id='.$idcustomercoin))->data[0];
        }
        // var_dump($_SESSION);
        // var_dump($data['dataCart']);die;
        
        

        
        $this->load->view('header-cart',$data);
        $this->load->view('cart',$data);
        $this->load->view('footer');
    }

    function addToCart($kode){
        $dataUmum = [
            'dataIkan' => $this->Model_fishmarket->getDataIkan($kode)[0],//menghasilkan data-data yang sesuai dengan kode ikan
            'idCustomer' => $_SESSION['idcustomer'],
            'dataCart' => $this->Model_fishmarket->getDataCart($_SESSION['idcustomer']),
            'dataSeller' => $this->Model_fishmarket->getDataSeller($this->Model_fishmarket->getDataIkan($kode)[0]->idfishkios)[0]
        ];
        
        foreach ($dataUmum['dataCart'] as $key => $value) {
            if($dataUmum['dataSeller']->idfishowner == $value->idfishowner){ //apakah ada IDFishowner yang sama dengan IDFishowner di Cart milik user
                $idCart = $value->idcart;
            }else{
                $idCart = null;
            }
            
        }
        if(isset($_SESSION['idcustomer'])){ // mengecek apakah ada user yang sedang Login
            if($idCart === null ){ //mengecek apakah ID Cart nya kosong. Jika kosong maka men-setting id cart random.
                $idCart = 'crt'.'-'.random_string('numeric',3);
            } //tetapi jika sudah di-set, makan akan menggunakan ID Cart yang sudah disetting untuk diteruskan ke DB Cart.
                    $data = [
                        'idcart' => $idCart,
                        'idfishowner' => $dataUmum['dataSeller']->idfishowner,
                        'idcustomer' => $dataUmum['idCustomer'],
                        'namaproduct' => $dataUmum['dataIkan']->fishgenericproductname,
                        'quantity' => 1,
                        'harga' => $dataUmum['dataIkan']->fishregularprice
                    ];

            $this->Model_fishmarket->insertCart($data);//menginput pembelanjaan user yang ada didalam cart kedalam database.
            
            redirect('','refresh');}
        else { // jika tidak ada yang login, makan user diharuskan untuk login atau akan dialihkan kehalaman utama.
            redirect('','refresh');
        }
        
    }
}