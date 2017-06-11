<?php
/**
 * @Ana Bozovic 397/14
 */
    class logout extends CI_Controller{
       
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
        }
        
        public function index(){
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('isAdmin');
            $this->load->view('pocetna');  
        }
        
    }

?>