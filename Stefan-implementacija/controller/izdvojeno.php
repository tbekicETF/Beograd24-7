<?php
/**
 * @Stefan Djordjevic 467/14
 */
class Izdvojeno extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index(){
        $this->load->model('izdvojenoM');
        $res=$this->izdvojenoM->dohvatiPonude();
        $data['brojPonuda']=count($res);
        $data['pon']= $res; //sve ponude kao niz 
        $resS=$this->izdvojenoM->dohvatiSlike();
        $data['slike']= $resS; 
        $this->load->view('jednaVrstaPonuda', $data);
    }
    
}
?>

