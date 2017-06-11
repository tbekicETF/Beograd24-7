<?php
/**
 * @Ana Bozovic 397/14
 */
class logovanjeM extends CI_Model{
    
        public function getUser($name, $pass){
            $this->load->database();
            
            $this->db->where('KorisnickoIme',$name);
            $this->db->where('Lozinka',$pass);
            $this->db->limit(1);
           
            $query= $this->db->get('korisnik');
            if ($query->num_rows()==1){
                $row = $query->row();
                if ($row->Flag==1){
                    return 2;
                } 
                return 1;
            }
            return 0;
        }
    }
?>
