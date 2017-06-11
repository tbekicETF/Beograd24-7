<?php
/**
 * @Stefan Djordjevic 467/14
 */
class ocenjivanjeM extends CI_Model{
    
        public function oceni($ocena,$idp){
            $this->load->database();
            $this->db->where('IdP',$idp);
            $this->db->limit(1);
            $result = $this->db->get('ocena'); 
            if ($result->num_rows()==0){
                $data1 = array(
                    'IdP' =>$idp,
                    'BrGlasova' =>1,
                    'Ocena' => $ocena
                );

                $this->db->insert('ocena', $data1);
                return true;
            } else{
                $row=$result->row();

                $stara=$row->Ocena;
                $ukupno=$row->BrGlasova;
                $nova=($ocena+ ($stara*$ukupno))/($ukupno+1);
                $ukupno=$ukupno+1;

                $dataUpadate = array(
                    'BrGlasova' => $ukupno,
                    'Ocena'=> $nova
                );
                $this->db->where('IdP', $idp);
                $this->db->update('Ocena', $dataUpadate);

                return true;
            }
        }
       
};


?>
