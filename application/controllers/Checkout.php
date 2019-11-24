<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Chekcout extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_fishmarket');
    }

    function item(){
        
    }

}