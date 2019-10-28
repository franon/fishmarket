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
        // $this->sellerdb->select('tfishpriceofproductitems.idfishkios,tfishselerregister.idfishowner,fishkodeofproductsale,fishgenericproductname,fishregularprice,fishquantity,fishopendateofproductPrice
        // fishnoteofproduct');
        // $this->sellerdb->from('tfishpriceofproductitems a');
        // $this->sellerdb->join('tfishkiosproductidentity b', 'a.idfishkios=b.idfishkios');
        // $this->sellerdb->join('tfishselerregister c', 'c.idfishowner=b.idfishowner');
        // $this->sellerdb->where('c.fishownerusername = "rusmania"');
        $query = $this->sellerdb->query("SELECT tfishpriceofproductitems.idfishkios,tfishselerregister.fishownerusername,fishkodeofproductsale,fishgenericproductname,fishregularprice,fishquantity,fishopendateofproductPrice, fishnoteofproduct FROM tfishpriceofproductitems,tfishselerregister,tfishkiosproductidentity WHERE tfishselerregister.fishownerusername = '$username' AND tfishpriceofproductitems.idfishkios=tfishkiosproductidentity.idfishkios AND tfishselerregister.idfishowner=tfishkiosproductidentity.idfishowner");
        return $query->result();
        // $query = $this->sellerdb->get()->result();

        // if($query->num_rows() != 0){
        //     return $query->result();
        // }else{
        //     return FALSE;
        }

        // return $this->sellerdb->get('tfishpriceofproductitems')->result();

        // SELECT tfishpriceofproductitems.idfishkios,tfishselerregister.idfishowner,fishkodeofproductsale,
        // fishgenericproductname,fishregularprice,fishquantity,fishopendateofproductPrice, fishnoteofproduct 
        // FROM tfishpriceofproductitems,tfishselerregister,tfishkiosproductidentity 
        // WHERE tfishselerregister.fishownerusername = "rusmania" 
        // AND tfishpriceofproductitems.idfishkios=tfishkiosproductidentity.idfishkios 
        // AND tfishselerregister.idfishowner=tfishkiosproductidentity.idfishowner
    
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