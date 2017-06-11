<?php
/**
 * @Irina Mirkovic 141/14
 */
class kontakt extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index(){
        
        $this->load->view('kontakt');
    }
    
}
?>

