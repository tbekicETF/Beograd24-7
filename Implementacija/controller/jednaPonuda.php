<?php
/**
 * @Irina Mirkovic 141/14
 */
class jednaPonuda extends CI_Controller{
   public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index($id){
        $idponude= base64_decode(urldecode($id));
        $this->load->model('jednaPonudaM');
       
        $res=$this->jednaPonudaM->dohvatiPonude($idponude);
        $res1= $this->jednaPonudaM->dohvatiDatum($idponude);
        $s1= $this->jednaPonudaM->dohvatiSliku($idponude,1);
        $s2= $this->jednaPonudaM->dohvatiSliku($idponude,2);
        $s3= $this->jednaPonudaM->dohvatiSliku($idponude,3);
        $data['pon']= $res;
        $data['s1']= $s1;
        $data['s2']= $s2;
        $data['s3']= $s3;
        $data['datum']=$res1;
        $this->load->view('jednaPonuda', $data);
    }

    
}
?>