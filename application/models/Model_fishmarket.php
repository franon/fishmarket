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
}