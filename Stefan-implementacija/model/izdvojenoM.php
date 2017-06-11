<?php
/**
 * @Stefan Djordjevic 467/14
 */
class izdvojenoM extends CI_Model{
    
    public function dohvatiPonude(){
           
        $this->load->database();
        $this->db->where('Preporuceno',1);
        
        $query= $this->db->get('ponuda');
       
          
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
             $res[$i]=$row; 
             $i++;
       }
       return $res;
    }
    public function dohvatiSlike(){
        $this->load->database();
        $this->db->where('Preporuceno',1);
        $query= $this->db->get('ponuda');
        
        $slike= array();
        $i=0;
        foreach ($query->result() as $row){
            $nameSlika= "Slika1";
            $s1=$row->$nameSlika;
            $slika= base64_encode($s1);
            $stringRet= '<img class="mySlides" src="data:image/jpeg;base64,'.$slika.'">';
            $slike[$i]=$stringRet;
            $i++;
        }
        return $slike;
    }
}
?>
