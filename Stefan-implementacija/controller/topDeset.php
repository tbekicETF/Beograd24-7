<?php
/**
 * @Stefan Djordjevic 467/14
 */
class topDeset extends CI_Controller{
  
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index(){
        $this->load->model('topDesetM');
        $res=$this->topDesetM->dohvatiPonude();
        $data['brojPonuda']=count($res);
        $data['pon']= $res; //sve ponude kao niz 
        $resS=$this->topDesetM->dohvatiSlike();
        $data['slike']= $resS; 
        $this->load->view('jednaVrstaPonuda', $data);
    }
}
?>

