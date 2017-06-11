<?php
/**
 * @Irina Mirkovic 141/14
 */
class obrisiPonuduNocna extends CI_Controller{
    private $id;
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index($idponude){
        $this->id= base64_decode(urldecode($idponude));
        $this->load->model('obrisiPonuduNocnaM');
        $this->obrisiPonuduNocnaM->obrisi($this->id);
        $this->load->view('sveVrstePonuda');
    }
  
    
}
?>

