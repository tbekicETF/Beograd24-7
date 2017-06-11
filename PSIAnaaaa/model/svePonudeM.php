<?php
/**
 * @Ana Bozovic 397/14 i Tijana Bekic 335/14
 */
class svePonudeM extends CI_Model{
    
    public function dohvatiPonude(){
           
       
        $this->load->database();
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
    
    public function get_autocomplete($search_data)
    {
        $this->load->database();
        $this->db->like('Naziv', $search_data);
        
        $query = $this->db->get('ponuda');
        if ($query->num_rows()==0) return NULL;
        $response="";
      
        foreach ($query->result() as $row) {
           $idPon=$row->IdP;
           $temp=urlencode(base64_encode($idPon));
           $response = $response . "<li><a href='http://localhost/PSIproject/index.php/jednaPonuda/index/".$temp."'>" .$row->Naziv. "</a></li>". " ";
        }
        return $response;
    }
}
?>
