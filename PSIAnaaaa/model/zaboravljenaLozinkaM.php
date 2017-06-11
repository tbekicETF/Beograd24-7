<?php
/**
 * @Ana Bozovic 397/14 i Tijana Bekic 335/14
 */
class zaboravljenaLozinkaM extends CI_Model{
    
    public function provera($email, $user){
        $this->load->database();
        
        $this->db->where('KorisnickoIme', $user);
        $this->db->limit(1);
        $query=$this->db->get('korisnik');
        
        if ($query->num_rows()==0){
            ?> alert($user) <?php
            return "";
        }
        $kor=$query->row();
        $mail= $kor->Email;
        if ($mail==$email){
            
            $emailUser=$mail;
            $pass=$kor->Lozinka;
            
            $fromMail="ttbeograd247@gmail.com";
            $subject="Vasa lozinka";
            $message= "Postovani ". $user .", <br/> <br/>" ."Vasa lozinka je: ". $pass . 
                    "<br/> <br/>" . "Vas, Tim Top";
            
            $config = Array(
                'protocol'=>'smtp',
                'smtp_host'=>'ssl://smtp.googlemail.com',
                'smtp_port'=>'465',
                'smtp_user'=>$fromMail,
                'smtp_pass'=>'beograd247',
                'mailtype'=>'html',
                'starttls'=>true,
                'newline'=>"\r\n"
                
            );

            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            

            $this->email->from($fromMail, 'Admin');
            $this->email->to($emailUser);
            $this->email->subject($subject);
            $this->email->message($message);
            $this->email->send();
            return true;
        }
        else{
            return false;
        }
            
        
    }
       
};


?>
