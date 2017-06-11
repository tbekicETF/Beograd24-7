<?php
/**
 * @Stefan Djordjevic 467/14
 */
class sveVrstePonuda extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index(){
        
        $this->load->view('sveVrstePonuda');
    }
    
}
?>

