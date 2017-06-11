<?php
/**
 * @Irina Mirkovic 141/14
 */
class jednaPonudaM extends CI_Model{
    
    public function dohvatiPonude($idponude){
        $this->load->database(); 
        
        $this->db->where('IdP',$idponude);
        $query= $this->db->get('ponuda');
        $row = $query->row();
        
        $this->db->where('IdP',$idponude);
        $ocenaQ= $this->db->get('ocena');
        $ocena = $ocenaQ->row();
        
        $this->db->where('IdP',$idponude);
        $dnevnaQ= $this->db->get('ponudadan');
        $dne = $dnevnaQ->row();
        
        $ret= array();
        $ret[0]=$row;
        $ret[1]=$ocena;
        $ret[2]=$dne;
        return $ret;
    }
    public function dohvatiSliku($idponude, $i){
        $this->load->database(); 
        
        $this->db->where('IdP',$idponude);
        $query= $this->db->get('ponuda');
        $row = $query->row();
        $name= "Slika".$i;
        $s1=$row->$name;
        $slika= base64_encode($s1);
        $stringRet= '<img class="mySlides" src="data:image/jpeg;base64,'.$slika.'">';
        return $stringRet;

    }
    public function dohvatiDatum($idponude){
        $this->load->database(); 
        
        $this->db->where('IdP',$idponude);
        $query= $this->db->get('ponuda');
        $row = $query->row();
        if ($row->dn==1){
            $this->db->where('IdP',$idponude);
            $query1= $this->db->get('ponudadan');
            $row1 = $query1->row();
            return $row1->Datum;
        } else{
            $this->db->where('IdP',$idponude);
            $query1= $this->db->get('nocna');
            $row1 = $query1->row();
            return $row1->Datum;
        }
    }
}
?>