<?php
/**
 * @Tijana Bekic 335/14
 */
class mojeRezM extends CI_Model{
    
    public function dohvatiPonudeDan($username){
        $this->load->database();
        
        $this->db->where('KorisnickoIme',$username);
        $query= $this->db->get('korisnik');
        $row = $query->row();
        $idk=$row->IdK;
        
        $this->db->where('IdK',$idk);
        $query= $this->db->get('rezervacijadan');
        
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
            $idp=$row->IdP;
            $this->db->where('IdP',$idp);
            $this->db->limit(1);
            
            $query2= $this->db->get('ponuda');
            $row2 = $query2->row();
            $res[$i]=$row2; 
            $i++;
        }
        return $res;
    }
    public function dohvatiPonudeNoc($username){
        $this->load->database();
        
        $this->db->where('KorisnickoIme',$username);
        $query= $this->db->get('korisnik');
        $row = $query->row();
        $idk=$row->IdK;
        
        $this->db->where('IdK',$idk);
        $query= $this->db->get('rezervacijanoc');
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
            $idp=$row->IdP;
            $this->db->where('IdP',$idp);
            $this->db->limit(1);
            
            $query2= $this->db->get('ponuda');
            $row2 = $query2->row();
            $res[$i]=$row2; 
            $i++;
        }
        return $res;
    }
    public function dohvatiRezDan($username){
        $this->load->database();
        
        $this->db->where('KorisnickoIme',$username);
        $query= $this->db->get('korisnik');
        $row = $query->row();
        $idk=$row->IdK;
        
        $this->db->where('IdK',$idk);
        $query= $this->db->get('rezervacijadan');
        
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
            $res[$i]=$row; 
            $i++;
        }
        return $res;
    }
    public function dohvatiRezNoc($username){
        $this->load->database();
        
        $this->db->where('KorisnickoIme',$username);
        $query= $this->db->get('korisnik');
        $row = $query->row();
        $idk=$row->IdK;
        
        $this->db->where('IdK',$idk);
        $query= $this->db->get('rezervacijanoc');
        
        $res= array();
        $i=0;
        foreach ($query->result() as $row){
            $res[$i]=$row; 
            $i++;
        }
        return $res;
    }
    
     public function dohvatiSlikeNoc($username){
        $this->load->database();
        $this->db->where('KorisnickoIme',$username);
        $queryKorisnik= $this->db->get('korisnik');
        $rowKorisnik = $queryKorisnik->row();
        $idk=$rowKorisnik->IdK;
        
        $this->db->where('IdK',$idk);
        $query= $this->db->get('rezervacijanoc');
       
        
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
     public function dohvatiSlikeDan($username){
        $this->load->database();
        $this->db->where('KorisnickoIme',$username);
        $queryKorisnik= $this->db->get('korisnik');
        $rowKorisnik = $queryKorisnik->row();
        $idk=$rowKorisnik->IdK;
        
        $this->db->where('IdK',$idk);
        $query= $this->db->get('rezervacijadan');
        
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
