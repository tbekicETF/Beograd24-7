<?php
/**
 * @Tijana Bekic 335/14 i Ana Bozovic 397/17
 */
class svePonude extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index(){
      
        $search_data =$_GET["q"];
        $this->load->model('svePonudeM');
        $query = $this->svePonudeM->get_autocomplete($search_data);
        
        
        if ($query ==NULL){
            $response="nema sugestija";
        }
        else{
           $response=$query;
        }
       
        echo $response;
       
        
    }
    
    public function index2(){
       $this->load->model('svePonudeM');
        $res=$this->svePonudeM->dohvatiPonude();
        $data['brojPonuda']=count($res);
        $data['pon']= $res; //sve ponude kao niz 
        $resS=$this->svePonudeM->dohvatiSlike();
        $data['slike']= $resS; 
          $this->load->view('svePonude', $data);
        //$this->load->view('jednaVrstaPonuda', $data);
        
    }
    
}
?>

