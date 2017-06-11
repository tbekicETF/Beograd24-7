<?php
/**
 * @Tijana Bekic 335/14
 */
class rezervacijaNoc extends CI_Controller{
   
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index($idponude){
        $id= base64_decode(urldecode($idponude));
        $this->session->set_userdata('ponuda',$id);
       
        $user = $this->session->userdata('username');
        $this->load->model('rezervacijaNocM');
        $res=$this->rezervacijaNocM->vecIma($id, $user);
        if ($res==false){
            $this->load->view('rezervacijaNoc');
        } else{
            $data['flag']=0;
            $this->load->view('promeniRez', $data);
        }
        

    }
    
    public function promeniRez(){
        $this->load->view('rezervacijaNoc');
    }
    
    
    public function  checkForm(){
        $this->form_validation->set_rules('kolicina',"Kolicina", 'required');
        $this->form_validation->set_rules('vrsta',"Vrsta", 'required');
        $this->form_validation->set_rules('kolicina',"kolicina",'callback_verifyForm');
        
        if ($this->form_validation->run()==true){
           
            $this->load->view('sveVrstePonuda');
            echo "<script>alert('Rezervacija je uspesna. Dodjite do 22h, kako bi Vasa rezervacija bila validna.');</script>";
        } else{
            $this->load->view('sveVrstePonuda');
            echo "<script>alert('Rezervacija nije moguca, nema dovoljno mesta.');</script>";
        }
      
    }

    public function verifyForm(){
        $user = $this->session->userdata('username');
        $id=$this->session->userdata('ponuda');
        $kolicina=$this->input->post('kolicina');
        $vrsta=$this->input->post('vrsta');
       
        $this->load->model('rezervacijaNocM');
        $res=$this->rezervacijaNocM->rezervisi($kolicina,$vrsta,$id, $user);
        return $res;
    }
    
}
?>

