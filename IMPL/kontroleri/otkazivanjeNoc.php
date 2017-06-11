<?php
/**
 * @Tijana Bekic 335/14
 */
class otkazivanjeNoc extends CI_Controller{
   
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index($idponude){
        $id= base64_decode(urldecode($idponude));
        $this->session->set_userdata('ponuda',$id);
        $this->load->view('otkazivanjeNoc');
    }
    
    public function  otkazi(){
        $id= $this->session->userdata('ponuda');
        $korisnik= $this->session->userdata('username');
        $this->load->model('otkazivanjeNocM');
        $this->otkazivanjeNocM->otkazi($id, $korisnik);
        $this->load->view('sveVrstePonuda');
    }
    
}
?>

