<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database('seller',TRUE);
        $this->load->model('model_sellerLogin');
        $this->load->model('model_seller');

    }

    public function index(){
        
        if(!isset($_SESSION['admin_username'])){
            redirect('seller/dashboard/login');
        }
        $nama['admin'] = ($_SESSION['admin_nama']);

        $this->load->view('seller/header',$nama);
        $this->load->view('seller/dashboard');
        $this->load->view('seller/footer');
    }
    
    public function login(){
        
        $this->load->view('seller/login');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $seller = $this->model_sellerLogin->get($username);
        print_r($_SESSION);
        
        if(empty($seller[0])){
            $this->session->set_flashdata('message', 'Kamu belum terdaftar');
            // redirect('seller/login');
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
                redirect('seller/dashboard');
            }else{
                $this->session->set_flashdata('message', 'username atau password salah');
                redirect('seller/dashboard/login');
            }
        }

    }

    public function logout(){
        // $hapussession = array();
        $this->session->unset_userdata('admin_authenticated');
        $this->session->unset_userdata('admin_username');
        $this->session->unset_userdata('admin_nama');
        redirect('seller/dashboard/login');
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
            redirect('seller/dashboard');
        }    
            // redirect('seller/dashboard/');
        
    }

    public function dataBarangSeller(){
        $this->load->view('seller/header');
        $username = $_SESSION['admin_username'];
        $data['barang'] = $this->model_seller->getBarangSpesific($username);
        // var_dump($data);
        $this->load->view('seller/Data_barang',$data);
        $this->load->view('seller/footer');
    }
}

?>