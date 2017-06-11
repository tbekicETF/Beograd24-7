<?php
/**
 * @Ana Bozovic 397/14
 */
class dodajPonuduDnevna extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
    }
    public function index(){
        
        $this->load->view('dodajPonuduDnevna');
    }
    
    public function checkOffer(){
        //$this->form_validation->set_rules('naziv',"Naziv", 'required');
        //$this->form_validation->set_rules('opis',"Opis", 'required');
        //$this->form_validation->set_rules('lokacija',"Lokacija", 'required');
        //$this->form_validation->set_rules('preporuceno',"Preporuceno", 'required');
        //$this->form_validation->set_rules('rezervacija',"Rezervacija", 'required');
        //$this->form_validation->set_rules('brMesta',"BrMesta", 'required');
        //$this->form_validation->set_rules('datum',"Datum", 'required');
        //$this->form_validation->set_rules('datum',"Datum", 'regex_match[\d{4}-(0[1-9]|1[0-2])-(0[1-9]|1[0-9]|2[0-9]|3(0|1)) (0[1-9]|1[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])]');
        //$this->form_validation->set_rules('slika1',"BrojMesta", 'required');
        //$this->form_validation->set_rules('slika2',"BrojMesta", 'required');
        //$this->form_validation->set_rules('slika3',"BrojMesta", 'required');


        $this->form_validation->set_rules('datum',"Datum",'callback_verifyOffer');


        if ($this->form_validation->run()==true){

            $this->load->view('sveVrstePonuda');
        }
        else {
            $this->load->view('dodajPonuduDnevna');
        }
    }
    
    public function verifyOffer(){

        $naziv=$this->input->post('naziv');
        $opis=$this->input->post('opis');
        $lokacija=$this->input->post('lokacija');
        $preporuceno=$this->input->post('preporuceno');
        $rezervacija=$this->input->post('rezervacija');
        $brojMesta=$this->input->post('brojMesta');
        $datum=$this->input->post('datum');
       
        $day = (int) substr($datum, 8, 10);
        $month = (int) substr($datum, 5, 7);
        $year = (int) substr($datum, 0, 4);
        $res= checkdate($month, $day, $year);
        if ($res==false){
            $this->form_validation->set_message('verifyOffer','Forma nije ispravna. Pokušajte ponovo.');
            return false;
        }
        
        
        $vrsta=$this->input->post('vrsta');
        if ($vrsta=="izaberi"){
            $this->form_validation->set_message('verifyOffer','Forma nije ispravna. Pokušajte ponovo.');
            return false;
        }
        $slika1=NULL;
        $slika2=NULL;
        $slika3=NULL;
        if($_FILES['slika1']['size']>0){
            $config['upload_path']='./images/';
            $config['allowed_types']='gif|jpg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('slika1')){
                $error=array('error'=> $this->upload->display_errors());
                $this->load->view('kontakt');
                return false;
            } else {
                $slika1= $this->upload->data();
            }      
        }
        if($_FILES['slika2']['size']>0){
            $config['upload_path']='./images/';
            $config['allowed_types']='gif|jpg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('slika2')){
                $error=array('error'=> $this->upload->display_errors());
                $this->load->view('kontakt');
                return false;
            } else {
                $slika2= $this->upload->data();
            }      
        }
        if($_FILES['slika3']['size']>0){
            $config['upload_path']='./images/';
            $config['allowed_types']='gif|jpg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('slika3')){
                $error=array('error'=> $this->upload->display_errors());
                $this->load->view('kontakt');
                return false;
            } else {
                $slika3= $this->upload->data();
            }      
        }
        
        $this->load->model('dodajPonuduDnevnaM');
        $res=$this->dodajPonuduDnevnaM->setOffer($naziv, $opis, $lokacija, $preporuceno, $rezervacija, $brojMesta, $datum,$vrsta, $slika1,$slika2,$slika3);
        if ($res){
            return true;
        }else {
            $this->form_validation->set_message('verifyOffer','Forma nije ispravna. Pokušajte ponovo.');
            return false;
        }  

    }
    
}
?>

