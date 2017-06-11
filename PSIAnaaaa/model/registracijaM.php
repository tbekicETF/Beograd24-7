<?php
/**
 * @Ana Bozovic 397/14
 */
class registracijaM extends CI_Model{
    
        public function setUser($name, $lastname,$username, $pass, $email){
            $this->load->database();
            
            $this->db->where('KorisnickoIme',$username);
            
            $query= $this->db->get('korisnik');
            
             if ($query->num_rows()==0){
                $data = array(
                 'Ime' => $name,
                 'Prezime' =>$lastname ,
                 'Email' => $email,
                 'KorisnickoIme' => $username,
                 'Lozinka' => $pass,
                 'Flag'=>0
                );

                $this->db->insert('Korisnik', $data);

                $this->db->where('KorisnickoIme',$username);


                $query1= $this->db->get('korisnik');

                if ($query1->num_rows()==1){
                    return true;
                }
                else 
                    return false;
            }
            
            return false;
        }
       
};


?>