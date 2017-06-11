<?php
/**
 * @Ana Bozovic 397/14 i Tijana Bekic 335/14
 */
class zaboravljenaLozinka extends CI_Controller{
   
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
      
    }
    public function index(){
        $data['flag']=0; //prvi put na str
        $this->load->view('zaboravljenaLozinka', $data);
    }

    public function  checkPass(){
      
        $emailUser=$this->input->post('mail');
        $user = $this->input->post('ime');
        $this->load->model('zaboravljenaLozinkaM');
        $res=$this->zaboravljenaLozinkaM->provera($emailUser, $user);
        
        if ($res==false){
            $data['flag']=2; //nije ok mail/ime
            $this->load->view('zaboravljenaLozinka', $data);

        } else{ 
            $data['flag']=1; //uspeh
            $this->load->view('zaboravljenaLozinka', $data);
            
        }
       
    }

    
}
?>

