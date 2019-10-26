<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class seller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database('seller',TRUE);
        $this->load->model('model_sellerLogin');

    }

    public function index(){

        print_r($_SESSION);
        $this->load->view('seller/dashboard');
    }
    
    public function login(){
        
        $this->load->view('seller/login');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $seller = $this->model_sellerLogin->get($username);

        if(empty($seller[0])){
            $this->session->set_flashdata('message', 'Kamu belum terdaftar');
            // redirect('seller/index');
        }else{
            var_dump($seller[0]);
            if (md5($password) == $seller[0]->fishownerpassword) {
                $session = array(
                    'admin_authenticated' => TRUE,
                    'admin_username' => $seller[0]->fishownerusername,
                    // 'admin_status' => 'admin',
                    'admin_nama' => $seller[0]->fishownerfullname
                );

                $this->session->set_userdata($session);
                redirect('seller/Login');
            }else{
                $this->session->set_flashdata('message', 'username atau password salah');
                // redirect('seller/index');
            }
        }

    }

    public function logout(){
        // $hapussession = array();
        $this->session->unset_userdata('admin_authenticated');
        $this->session->unset_userdata('admin_username');
        $this->session->unset_userdata('admin_nama');
        redirect('seller/index');
        }
    
    public function register(){
        
        $this->form_validation->set_rules('fishowneremail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('fishownerfullname', 'Full Name', 'required');
        $this->form_validation->set_rules('fishownerusername', 'Username', 'required');
        $this->form_validation->set_rules('fishownerpassword', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('seller/register');
            var_dump($this->form_validation->run());
            echo "apaan nih";
        }else{
            $email = $this->input->post('fishowneremail');
            $fullname = $this->input->post('fishownerfullname');
            $username = $this->input->post('fishownerusername');
            $password = md5($this->input->post('fishownerpassword'));
            $this->model_sellerLogin->register($email,$fullname,$username,$password);
            // $this->session->set_flashdata('message', 'Kamu belum terdaftar');
            // redirect('seller/login');
        }    
            // redirect('seller/index');
        
    }
    
    public function tambahProduct(){


    }

}

?>