<?php


defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_userLogin');

    }

    function index(){
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('namacustomer', 'Full Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // $this->load->view('seller/register');
            die;
        }else{

            $data = [
            'namacustomer' => $this->input->post('namacustomer'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'username' => $this->input->post('username'),
            'tglregister' => date('Y-m-d H:m:s')
            ];
            $this->Model_userLogin->register($data);
            redirect('user/login','refresh');
            
        }
    }




}
