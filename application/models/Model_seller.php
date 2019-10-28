<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_seller extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->sellerdb = $this->load->database('seller',TRUE);
    }
    
    // public function getBarang(){
    //     // var_dump($this->sellerdb->get('tfishpriceofproductitems')->result());
    //     return $this->sellerdb->get('tfishpriceofproductitems')->result();
    // }

    
    
    public function getBarangSpesific($username){
        $query = $this->sellerdb->query("SELECT tfishpriceofproductitems.idfishkios,tfishselerregister.fishownerusername,fishkodeofproductsale,fishgenericproductname,fishregularprice,fishquantity,fishopendateofproductPrice, fishnoteofproduct FROM tfishpriceofproductitems,tfishselerregister,tfishkiosproductidentity WHERE tfishselerregister.fishownerusername = '$username' AND tfishpriceofproductitems.idfishkios=tfishkiosproductidentity.idfishkios AND tfishselerregister.idfishowner=tfishkiosproductidentity.idfishowner");
        return $query->result();
        }

    public function hapusBarang($fishkodeofproductsale){
            return $this->sellerdb->delete('tfishpriceofproductitems',array('fishkodeofproductsale'=>$fishkodeofproductsale));
        }

    public function tambahBarang($idfishkios,$fishkodeofproductsale,$fishgenericproductname,$fishregularprice,$fishopendateofproductPrice,$fishnoteofproduct){
            $data = array(
                'fishkodeofproductsale'=>$idfishkios,
                'fishkodeofproductsale'=>$fishkodeofproductsale,
                'fishgenericproductname'=>$fishgenericproductname,
                'fishregularprice'=>$fishregularprice,
                'fishopendateofproductPrice'=>$fishopendateofproductPrice,
                'fishflagofproduct'=>'0',
                'fishnoteofproduct'=>$fishnoteofproduct
            );
            var_dump($this->sellerdb->set($data)->get_compiled_insert('tfishpriceofproductitems'));
            // return $this->sellerdb->insert('tfishpriceofproductitems');
            // return $this->sellerdb->set($data)->get_compiled_insert('tfishpriceofproductitems');
        }

}
?>