<?php
/**
 * @Irina Mirkovic 141/14
 */
class jednaVrstaPonudaNocM extends CI_Model{
    
    public function dohvatiPonude(){
           
        $this->load->database();
        $query= $this->db->get('nocna');
        
          
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
            $id=$row->IdP;
            $this->db->where('IdP',$id);
            $this->db->limit(1);
            
            $query2= $this->db->get('ponuda');
            $row2 = $query2->row();
            $res[$i]=$row2; 
            $i++;
       }
       return $res;
    }
    public function dohvatiSlike(){
        $this->load->database();
        $query= $this->db->get('nocna');
        
        $slike= array();
        $i=0;
        foreach ($query->result() as $row){
            $id=$row->IdP;
            $this->db->where('IdP',$id);
            $this->db->limit(1);
            $querySlika= $this->db->get('ponuda');
            $rowSlika = $querySlika->row();
            $nameSlika= "Slika1";
            $s1=$rowSlika->$nameSlika;
            $slika= base64_encode($s1);
            $stringRet= '<img class="mySlides" src="data:image/jpeg;base64,'.$slika.'">';
            $slike[$i]=$stringRet;
            $i++;
        }
        return $slike;
    }
}
?>
