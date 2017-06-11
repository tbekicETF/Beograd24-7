<?php
/**
 * @Tijana Bekic 335/14
 */
class otkazivanjeDanM extends CI_Model{
    
    public function otkazi($idponude,$korisnik){
        $this->load->database();
        
        $this->db->where('KorisnickoIme', $korisnik);
        $this->db->limit(1);
        $koris=$this->db->get('korisnik');
        $kor=$koris->row();
        $idk=$kor->IdK;
        
        
        $this->db->where('IdP', $idponude);
        $this->db->where('IdK', $idk);
        $temp=$this->db->get('rezervacijadan'); 
        $t= $temp->row();
        $kolicina= $t->Kolicina;
        
        $this->db->where('IdP', $idponude);
        $pon=$this->db->get('ponudadan'); 
        $p=$pon->row();
        $kolicina=$kolicina+$p->BrMesta;
        $dataUpdate= array(
            'BrMesta'=>$kolicina
        );
        $this->db->where('IdP', $idponude);
        $this->db->update('ponudadan', $dataUpdate); 
        
        $this->db->where('IdP', $idponude);
        $this->db->where('IdK', $idk);
        $this->db->delete('rezervacijadan'); 
        
        return true;
    }
       
};


?>