<?php


defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_userLogin');

    }

    function index(){
        // die;
        $this->load->view('user/login');
    }

    function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    if (isset($username)) {
        $user = $this->Model_userLogin->get($username);
    }else{
        echo "uwu";
    }
        if(empty($user)){
            $this->session->set_flashdata('message','username tidak ada');
            // redirect('homepage','refresh');
            
        }else{
            if (md5($password) == $user->password) {
                $data = [
                    // 'cust_authenticated' => TRUE,
                    'idcustomer' => $user->idcustomer,
                    'cust_username' => $user->username,
                    'cust_nama' => $user->namacustomer,
                    'tglLogin' => date('Y-m-d H:m:s')
                ];
                $this->session->set_userdata($data);
                $this->Model_userLogin->history($data);
                redirect('homepage','refresh');
            }else{
                $this->session->set_flashdata('message','password salah');
                
                redirect('users/login/login','refresh');
                
                echo "salah pass";
            }
    
        }    
    
    }

    function logout(){
        $this->session->sess_destroy();
    }


    }

