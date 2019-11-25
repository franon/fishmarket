<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_seller extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->sellerdb = $this->load->database('seller',TRUE);
    }

    public function getBarangSpesific($username){
        $query = $this->sellerdb->query("SELECT tfishpriceofproductitems.idfishkios,tfishselerregister.fishownerusername,fishkodeofproductsale,fishgenericproductname,fishregularprice,fishquantity,fishopendateofproductPrice, fishnoteofproduct FROM tfishpriceofproductitems,tfishselerregister,tfishkiosproductidentity WHERE tfishselerregister.fishownerusername = '$username' AND tfishpriceofproductitems.idfishkios=tfishkiosproductidentity.idfishkios AND tfishselerregister.idfishowner=tfishkiosproductidentity.idfishowner");
        return $query->result();
    }

    public function hapusBarang($fishkodeofproductsale){
            return $this->sellerdb->delete('tfishpriceofproductitems',array('fishkodeofproductsale'=>$fishkodeofproductsale));
    }

    public function tambahBarang($idfishkios,$fishkodeofproductsale,$fishgenericproductname,$fishregularprice,$fishquantity,$fishnoteofproduct){

            $data = array(
                'idfishkios'=>$idfishkios,
                'fishkodeofproductsale'=>$fishkodeofproductsale,
                'fishgenericproductname'=>$fishgenericproductname,
                'fishregularprice'=>$fishregularprice,
                'fishquantity'=>$fishquantity,
                'fishopendateofproductPrice'=>date('Y-m-d'),
                'fishflagofproduct'=>'0',
                'fishnoteofproduct'=>$fishnoteofproduct
            );
            $this->sellerdb->insert('tfishpriceofproductitems',$data);
            return $this->sellerdb->affected_rows();
    }

    public function getDataKios($username){
        $query = $this->sellerdb->query("SELECT idfishkios,kiosname from  tfishkiosproductidentity, tfishselerregister WHERE tfishkiosproductidentity.idfishowner=tfishselerregister.idfishowner AND tfishselerregister.fishownerusername='$username'");
        return $query->result();
    }
    
    public function getDataIkan($id){
        $query = $this->sellerdb->query("SELECT * FROM tfishpriceofproductitems WHERE tfishpriceofproductitems.fishkodeofproductsale='$id'");
        return $query->result();
    }

    public function ubahBarang($kodeIkan,$namaIkan,$hargaIkan,$qtyIkan,$tglIkan,$catatanIkan){
        $this->sellerdb->set('fishgenericproductname',$namaIkan);
        $this->sellerdb->set('fishregularprice',$hargaIkan);
        $this->sellerdb->set('fishquantity',$qtyIkan);
        $this->sellerdb->set('fishopendateofproductPrice',$tglIkan);
        $this->sellerdb->set('fishnoteofproduct',$catatanIkan);
        $this->sellerdb->where('fishkodeofproductsale',$kodeIkan);
        $query = $this->sellerdb->update('tfishpriceofproductitems');
        return $query;
        
    }
    
    public function addItem($data){
        $this->sellerdb->insert('tfishpriceofproductitems',$data);
        return $this->sellerdb->affected_rows();
    }

    public function deleteItem($kode){
        $this->sellerdb->delete('tfishpriceofproductitems',array('fishkodeofproductsale'=>$kode));
        return $this->sellerdb->affected_rows();
    }
    
    public function updateItem($data,$kodeIkan){
        $this->sellerdb->update('tfishpriceofproductitems',$data,['fishkodeofproductsale' => $kodeIkan]);
        return $this->sellerdb->affected_rows();
    }    
}
?>