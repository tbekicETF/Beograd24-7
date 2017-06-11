<?php
/**
 * @Stefan Djordjevic 467/14
 */
class ocenjivanje extends CI_Controller{
    
   
    public function __construct(){
        parent::__construct();
        
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index($idponude){
        
        $id= base64_decode(urldecode($idponude));
        $this->session->set_userdata('ponuda',$id);
        $this->load->view('ocenjivanje');
      
    }
    
    public function  checkForm(){
        $id= $this->session->userdata('ponuda');
        $ocena=$this->input->post('ocena');
        $this->load->model('ocenjivanjeM');
        $this->ocenjivanjeM->oceni($ocena,$id);
        $this->load->view('sveVrstePonuda');
      
    }
    
}
?>

