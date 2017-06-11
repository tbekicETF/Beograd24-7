<?php
/**
 * @Tijana Bekic 335/14
 */
class rezervacijaDanM extends CI_Model{
    
        public function rezervisi($brkarata,$idp,$korisnik){
            $this->load->database();
            
            $this->db->where('KorisnickoIme',$korisnik);
            $this->db->limit(1);
            $koris= $this->db->get('korisnik');
            $kor=$koris->row();
            $idk= $kor->IdK;
            
            $this->db->where('IdP',$idp);
            $this->db->limit(1);
            $result= $this->db->get('ponudadan');
            
            $row=$result->row();

            $datum= $row->Datum;
            $preostalo=$row->BrMesta;
  
            $this->db->where('IdP', $idp);
            $this->db->where('IdK', $idk);

            $temp= $this->db->get('rezervacijadan');
                
            if ($temp->num_rows()==0){
                if ($preostalo<$brkarata)
                    return false;
                $preostalo=$preostalo-$brkarata;

                $dataUpadate = array(
                    'BrMesta' => $preostalo
                );
                $this->db->where('IdP', $idp);
                $this->db->update('ponudadan', $dataUpadate);


                $data = array(
                'IdK' => $idk,
                'IdP' =>$idp ,
                'Kolicina' => $brkarata,
                'Datum' => $datum
                );
                $this->db->insert('rezervacijadan', $data);
            } else{
                $helper= $temp->row();
                $preostalo=$preostalo+$helper->Kolicina;
                if ($preostalo<$brkarata)
                    return false;
                $preostalo=$preostalo-$brkarata;
                $dataUpadate = array(
                    'BrMesta' => $preostalo
                );
                $this->db->where('IdP', $idp);
                $this->db->update('ponudadan', $dataUpadate);

                $data = array(
                    'Kolicina' => $brkarata,
                    'Datum' => $datum
                );
                $this->db->where('IdP', $idp);
                $this->db->where('IdK', $idk);
                $this->db->update('rezervacijadan', $data);
            }
                
            return true;

        }
        
        public function vecIma($id, $user){
            $this->load->database();
            
            $this->db->where('KorisnickoIme',$user);
            $this->db->limit(1);
            $koris= $this->db->get('korisnik');
            $kor=$koris->row();
            $idk= $kor->IdK;
            
            $this->db->where('IdP', $id);
            $this->db->where('IdK', $idk);
                
            $temp= $this->db->get('rezervacijadan');
            if ($temp->num_rows()==0){
                return false;
            } else {
                return true;
            }
        }
       
};


?>
