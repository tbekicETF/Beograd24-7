<?php
/**
 * @Ana Bozovic 397/14
 */
    class Registracija extends CI_Controller{
        
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('url','form'));
            $this->load->library(array('session','form_validation','email'));
        }
        
        private $temp=0;
        public function index(){
            $this->load->view('registracija');
        }
        
        public function checkRegistration(){
            $this->form_validation->set_rules('ime',"Ime", 'required');
            $this->form_validation->set_rules('prezime',"Prezime", 'required');
            $this->form_validation->set_rules('korisnicko',"KorisnickoIme", 'required');
            $this->form_validation->set_rules('lozinka',"Lozinka", 'required');
            $this->form_validation->set_rules('email',"Email", 'required');
            $this->form_validation->set_rules('email',"Email",'callback_verifyUser');


            $data['neuspeh']= $this->temp;
            if ($this->form_validation->run()==false){

                $this->load->view('registracijaNeuspeh', $data);
            }
            else {
                $data['ispis']=0;
                $this->load->view('logovanje',$data);
            }
        }
        
        public function verifyUser(){

            $name=$this->input->post('ime');
            //if ($name=="") { $this->temp=1; return false;}
            $lastname=$this->input->post('prezime');
            //if ($lastname=="")  {$this->temp=2; return false;}
            $username=$this->input->post('korisnicko');
            //if ($username=="")  { $this->temp=3;return false; }
            $pass=$this->input->post('lozinka');
            //if ($pass)  {$this->temp=4;return false; }
            $email=$this->input->post('email');
            if ($email=="")  { $this->temp=2; return false; }

            $this->load->model('registracijaM');
            $res=$this->registracijaM->setUser($name, $lastname, $username, $pass, $email);
            if ($res){
                return true;
            }else {
                $this->temp=1;
                return false;
            }
               
        }
        
    }
?>