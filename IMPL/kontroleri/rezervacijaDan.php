<?php
/**
 * @Tijana Bekic 335/14
 */
class rezervacijaDan extends CI_Controller{
   
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index($idponude){
     
        $id= base64_decode(urldecode($idponude));
        $this->session->set_userdata('ponuda',$id);
        $user = $this->session->userdata('username');
        $this->load->model('rezervacijaDanM');
        $res=$this->rezervacijaDanM->vecIma($id, $user);
        if ($res==false){
            $this->load->view('rezervacijaDan');
        } else{
            $data['flag']=1;
            $this->load->view('promeniRez', $data);
        }
    }
    public function promeniRez(){
        $this->load->view('rezervacijaDan');
    }

    public function  checkForm(){
        $this->form_validation->set_rules('kolicina',"Kolicina", 'required');
        $this->form_validation->set_rules('kolicina',"kolicina",'callback_verifyForm');
        
        if ($this->form_validation->run()==true){
           
            $this->load->view('sveVrstePonuda');
            echo "<script>alert('Rezervacija je uspesna.');</script>";
        } else{
            $this->load->view('sveVrstePonuda');
            echo "<script>alert('Rezervacija nije moguca, nema dovoljno mesta.');</script>";
        }
      
    }

    public function verifyForm(){
        $kolicina=$this->input->post('brojKarata');
        $user = $this->session->userdata('username');
        $id=$this->session->userdata('ponuda');
        $this->load->model('rezervacijaDanM');
        $res=$this->rezervacijaDanM->rezervisi($kolicina,$id, $user);
        return $res;
    }
    
}
?>

