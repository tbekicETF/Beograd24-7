<?php
/**
 * @Irina Mirkovic 141/14
 */
class jednaVrstaPonudaNoc extends CI_Controller{
   public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index(){
        $this->load->model('jednaVrstaPonudaNocM');
        $res=$this->jednaVrstaPonudaNocM->dohvatiPonude();
        $data['brojPonuda']=count($res);
        $data['pon']= $res; //sve ponude kao niz 
        $resS=$this->jednaVrstaPonudaNocM->dohvatiSlike();
        $data['slike']= $resS; 
        $this->load->view('jednaVrstaPonuda', $data);
    }
    
}
?>

