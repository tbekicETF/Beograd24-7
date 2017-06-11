<?php
/**
 * @Tijana Bekic 335/14
 */
class mojeRez extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index(){
        $username = $this->session->userdata('username');
        if ($username==NULL){
            $this->load->view('nisteUlogovani');
        }else {
            $this->load->model('mojeRezM');
            $res1=$this->mojeRezM->dohvatiPonudeDan($username);
            $data['brojPonudaDan']=count($res1);
            $data['ponDan']= $res1; //sve ponude kao niz 
            $res2=$this->mojeRezM->dohvatiPonudeNoc($username);
            $data['brojPonudaNoc']=count($res2);
            $data['ponNoc']= $res2; 
            $res3=$this->mojeRezM->dohvatiRezDan($username);
            $data['rezDan']= $res3; 
            $res4=$this->mojeRezM->dohvatiRezNoc($username);
            $data['rezNoc']= $res4; 
            $res5=$this->mojeRezM->dohvatiSlikeDan($username);
            $data['slikeDan']= $res5; 
            $res6=$this->mojeRezM->dohvatiSlikeNoc($username);
            $data['slikeNoc']= $res6; 
            $this->load->view('mojeRez', $data);
        }
    }
    
}
?>

