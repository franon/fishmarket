<?php


defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_userLogin');
    }

    function index(){
        
    }

    function Login(){
        $this->load->view('user/login');
    }

    function Register(){
        $this->load->view('user/register');
    }

    function Logout(){
        $this->session->sess_destroy();
        redirect('homepage','refresh');
        
    }


}