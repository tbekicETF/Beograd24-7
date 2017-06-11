<?php
/**
 * @Irina Mirkovic 141/14
 */
class obrisiPonuduNocnaM extends CI_Model{
    
    public function obrisi($idponude){
        $this->load->database();
        
        $this->db->where('IdP', $idponude);
        $this->db->delete('ocena'); 
        
        $this->db->where('IdP', $idponude);
        $this->db->delete('rezervacijadan'); 
        
        
        $this->db->where('IdP', $idponude);
        $this->db->delete('nocna'); 
        
        $this->db->where('IdP', $idponude);
        $this->db->delete('ponuda');  


        

       return true;
    }
       
};


?>