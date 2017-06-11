<?php
/**
 * @Tijana Bekic 335/14
 */
    class Pocetna extends CI_Controller{
        
        public function __construct() {
            
            parent::__construct();
            $this->load->library('session');
            
        }
        
        public function index(){
            
            $this->load->view('pocetna');
          
        }
        
    }

?>

