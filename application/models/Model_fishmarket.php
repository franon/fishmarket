<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_fishmarket extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->sellerdb = $this->load->database('seller',TRUE);
    }

    public function getDataIkan($kode = NULL){
        if ($kode == NULL) {
            return $this->sellerdb->get('tfishpriceofproductitems')->result();
        }else{
            return $this->sellerdb->get_where('tfishpriceofproductitems',['fishkodeofproductsale' => $kode])->result();
        }

    }

    public function getDataCart($idcustomer=null){
        if ($idcustomer == null) {
            return $this->db->get('cart')->result();
        }else{
            return $this->db->get_where('cart',['idcustomer' => $idcustomer])->result();
        }
    }

    public function insertCart($data){
        return $this->db->insert('cart',$data);
    }
}