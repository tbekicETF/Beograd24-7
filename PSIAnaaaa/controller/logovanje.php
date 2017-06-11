<?php
/**
 * @Ana Bozovic 397/14
 */
class logovanje extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','form_validation','email'));
        $this->load->database();
    }
    
    public function index(){
        $data['ispis']=0;
        $this->load->view('logovanje',$data);
    }
    
    private $temp=0;
    private $name="";
    private $pass="";
    
    public function checkLogin(){
        $this->form_validation->set_rules('ime',"KorisnickoIme", 'required');
        $this->form_validation->set_rules('lozinka',"Lozinka", 'required');
        $this->form_validation->set_rules('lozinka',"Lozinka",'callback_verifyUser');

        if ($this->form_validation->run()==false){

            $data['ispis']=0;
            $this->load->view('logovanje',$data);
        }
        else {
           
            
            $this->session->set_userdata('username', $this->name);
            $this->session->set_userdata('isAdmin', $this->temp);
            
            $data['username']=$this->name;
            $data['isAdmin']= $this->temp; //1 nije admin, 2 jeste;
            $this->load->view('sveVrstePonuda');
        }
    }
        
    public function verifyUser(){
        $this->name=$this->input->post('ime');
        $this->pass=$this->input->post('lozinka');

        $this->load->model('logovanjeM');
        $res=$this->logovanjeM->getUser($this->name, $this->pass);
        if ($res==1 || $res==2){
            $this->temp=$res;
            return true;
        }else {
            $this->form_validation->set_message('verifyUser','Uneli ste pogrešne podatke. Pokušajte ponovo.');
            return false;
        }

    }
        
    }
?>

