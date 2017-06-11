<?php
/**
 * @Irina Mirkovic 141/14
 */
class jednaVrstaPonudaDan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index($vrsta){
        $v=base64_decode(urldecode($vrsta));
        $this->load->model('jednaVrstaPonudaDanM');
        $res=$this->jednaVrstaPonudaDanM->dohvatiPonude($v);
        $data['brojPonuda']=count($res);
        $data['pon']= $res;  //sve ponude kao niz 
        $resS=$this->jednaVrstaPonudaDanM->dohvatiSlike($v);
        $data['slike']= $resS; 
        $this->load->view('jednaVrstaPonuda', $data);
    }
    
}
?>

