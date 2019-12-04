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

    public function getDataCart($idcustomer = NULL){
        if ($idcustomer == NULL) {
            return $this->db->get('cart')->result();
        }else{
            // var_dump($this->db->get_where('cart',['idcustomer' => $idcustomer])->result());die;
            return $this->db->get_where('cart',['idcustomer' => $idcustomer])->result();
        }
    }

    public function insertCart($data){
        return $this->db->insert('cart',$data);
    }

    public function getCart($idcart){
        return $this->db->get_where('cart', ['idcart' => $idcart])->result();
    }

    public function getDataCheckout($idcustomer){
        return $this->db->get_where('ttransaksi',['idcustomer'=>$idcustomer])->result();
    }

    public function checkout($data){
        $this->db->insert('ttransaksi',$data);
        return TRUE;
    }

    public function deleteCart($idcart){
        $this->db->delete('cart',array('idcart'=>$idcart));
    }

    public function transactions($data){
        return $this->sellerdb->insert('ttransactions',$data);
    }

    public function getDataSeller($idfishkios){
        $query = $this->sellerdb->query("SELECT tfishkiosproductidentity.idfishowner,fishownerusername,idfishkios,kiosname from  tfishkiosproductidentity, tfishselerregister WHERE tfishkiosproductidentity.idfishowner=tfishselerregister.idfishowner AND tfishkiosproductidentity.idfishkios=$idfishkios");
        return $query->result();
    }

}