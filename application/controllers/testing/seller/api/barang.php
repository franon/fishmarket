<?php

use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';

// use Restserver\Libraries\REST_Controller;
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends REST_Controller{

    function __construct(){
        parent::__construct();
        $this->load->database('seller',TRUE);
        $this->load->model('model_sellerLogin');
        $this->load->model('model_seller');
        header( 'Access-Control-Allow-Origin: *' );
    }

    function index_get(){
        $id = $this->get('id');
        if ($id === null) {
            $dataBarang = NULL;
        }else{
            $dataBarang = $this->model_seller->getBarangSpesific($id);
        }
        if ($dataBarang) {
            $this->response([
                'status' => true,
                'message' => 'Data Verified!',
                'data' => $dataBarang
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'ID Not Found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    function addItem_post(){
        // $_SESSION['admin_username'] = 'testing';s
        $automation = [
            'dataKios'=>$this->model_seller->getDataKios($_SESSION['admin_username'])[0],
            'kodeikan'=>substr(($_SESSION['admin_username']),0,2).'-'.random_string('numeric',3)  
        ];

        $dataItem = [

            'idfishkios' => $automation['dataKios']->idfishkios,
            'fishkodeofproductsale' => $automation['kodeikan'],
            'fishgenericproductname' => $this->post('fishgenericproductname'),
            'fishregularprice' => $this->post('fishregularprice'),
            'fishquantity' => $this->post('fishquantity'),
            'fishopendateofproductPrice' => date('Y-m-d'),
            'fishnoteofproduct' => $this->post('fishnoteofproduct')
        ];
        if ($this->model_seller->addItem($dataItem) >0 ) {
            $this->response([
                'status' => true,
                'message' => 'Added!'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'Fail to add!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }

    }

    function updateItem_put(){
        $kodeIkan = $this->put('kode');

        $dataItem = [
            // 'kodeIkan' = $kode,
            'fishgenericproductname' => $this->put('fishgenericproductname'),
            'fishregularprice' => $this->put('fishregularprice'),
            'fishquantity' => $this->put('fishquantity'),
            'fishopendateofproductPrice' => date('Y-m-d'),
            'fishnoteofproduct' => $this->put('fishnoteofproduct')
        ];

        if($this->model_seller->updateItem($dataItem,$kodeIkan) > 0){
            $this->response([
                'status' => true,
                'message' => 'Updated!'
            ], REST_Controller::HTTP_NO_CONTENT);
        }else{
            $this->response([
                'status' => false,
                'message' => 'Fail to update!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        };
    }

    function deleteItem_delete(){
        $kode = $this->delete('kode');

        if ($kode == NULL) {
            $this->response([
                'status' => false,
                'message' => 'Need ID!  '
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if ($this->model_seller->deleteItem($kode) >0 ) {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted!'
                ], REST_Controller::HTTP_NO_CONTENT);
            }else{
                $this->response([
                    'status' => false,
                    'message' => 'Wrong ID'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    
}