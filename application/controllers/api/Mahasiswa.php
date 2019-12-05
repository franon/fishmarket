<?php

defined('BASEPATH') OR exit('No Direct script access allowed');


require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';
use Restserver\Libraries\REST_Controller;

class Mahasiswa extends REST_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    

    function index_get(){

        $id = $this->get('id');
        if ($id === null) {
            $mahasiswa = $this->Mahasiswa_model->getMahasiswa();
        }else{
            $mahasiswa = $this->Mahasiswa_model->getMahasiswa($id);

        }


        if ($mahasiswa) {
            $this->response([
                'status' => true,
                'message' => 'eakk',
                'data' => $mahasiswa
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'ID Not Found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    function index_delete(){
        $id = $this->delete('id');

        if($id===null){
            $this->response([
                'status' => false,
                'message' => 'Butuh ID'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if ($this->Mahasiswa_model->deleteMahasiswa($id) > 0) {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted.'
                ], REST_Controller::HTTP_NO_CONTENT);
            }else{
                $this->response([
                    'status' => false,
                    'message' => 'Tidak ada ID'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
        
    }

    function index_post(){

        $data = [
            'nrp' => $this->post('nrp'),
            'nama' => $this->post('nama'),
            'email' => $this->post('email'),
            'jurusan' => $this->post('jurusan')
        ];

        if ($this->Mahasiswa_model->createMahasiswa($data) >0 ) {
            $this->response([
                'status' => true,
                'message' => 'Mahasiswa Baru ditambahkan!'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'Gagal menambahkan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    function index_put(){
        $id = $this->put('id');
        // var_dump($id);die;
        $data = [
            'nrp' => $this->put('nrp'),
            'nama' => $this->put('nama'),
            'email' => $this->put('email'),
            'jurusan' => $this->put('jurusan')
        ];

        if ($this->Mahasiswa_model->updateMahasiswa($data,$id) >0 ) {
            $this->response([
                'status' => true,
                'message' => 'Data Mahasiswa berhasil diubah!'
            ], REST_Controller::HTTP_NO_CONTENT);
        }else{
            $this->response([
                'status' => false,
                'message' => 'Gagal mengubah'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

?>