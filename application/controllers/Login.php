<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_userLogin');
    }

	public function index()
	{
        $this->load->view('user/login');        
    }
    
    public function login(){
        // $username = 'usrfran';
        // $pew = $this->model_login->get($username);
        // print_r($pew);
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        var_dump($username);
        $user = $this->model_userLogin->get($username);
        // print_r($user[0]);

        if (empty($user[0])) {
            $this->session->set_flashdata('message','username tidak ditemukan');
            redirect('login');
        }
        else{
            if ($password == $user[0]->password) {
                $session = array(
                    'cust_authenticated' => TRUE,
                    'cust_username' => $user[0]->username,
                    // 'cust_status' => 'user',
                    'cust_nama' => $user[0]->namacustomer
                );
                $this->session->set_userdata($session);
                echo 'password bener';
                redirect('homepage');
            }else{
                $this->session->set_flashdata('message','password salah');
                echo 'password salah';
                redirect('login');
            }
        }
    }


    public function logout(){
        $this->session->sess_destroy();
        redirect('login/login');
    }
}