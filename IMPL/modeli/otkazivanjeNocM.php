<?php
/**
 * @Tijana Bekic 335/14
 */
class otkazivanjeNocM extends CI_Model{
    
    public function otkazi($idponude,$korisnik){
        $this->load->database();
        
        $this->db->where('KorisnickoIme', $korisnik);
        $this->db->limit(1);
        $koris=$this->db->get('korisnik');
        $kor=$koris->row();
        $idk=$kor->IdK;
        
        //
        $this->db->where('IdP', $idponude);
        $this->db->where('IdK', $idk);
        $temp=$this->db->get('rezervacijanoc'); 
        $t= $temp->row();
        $k= $t->Kolicina;
        $v= $t->Vrsta;
        
        
        $this->db->where('IdP',$idponude);
        $this->db->limit(1);
        $result2= $this->db->get('nocna');
        $r=$result2->row();
        $p=0;
        $dataUpadate = array( 'BrSto' => $p);
        
        if ($v=="sto"){
            $p=$r->BrSto+$k;
            $dataUpadate = array(
               'BrSto' => $p
            );
        } else if ($v=="visoko"){
            $p=$r->BrVisoko+$k;
            $dataUpadate = array(
               'BrVisoko' => $p
           );
        } else if ($v=="separe"){
            $p=$r->BrSepare+$k;
            $dataUpadate = array(
               'BrSepare' => $p
           );
        }
        
        $this->db->where('IdP', $idponude);
        $this->db->update('nocna', $dataUpadate);
        //
        
        
        
        
        $this->db->where('IdP', $idponude);
        $this->db->where('IdK', $idk);
        $this->db->delete('rezervacijanoc'); 
        
       return true;
    }
       
};


?>