<?php
/**
 * @Tijana Bekic 335/14
 */
class rezervacijaNocM extends CI_Model{
    
        public function rezervisi($kolicina,$vrsta,$idp,$korisnik){
           
            $this->load->database();
            
            $this->db->where('KorisnickoIme',$korisnik);
            $this->db->limit(1);
            $koris= $this->db->get('korisnik');
            $kor=$koris->row();
            $idk= $kor->IdK;
            
            $this->db->where('IdP', $idp);
            $this->db->where('IdK', $idk);      
            $temp= $this->db->get('rezervacijanoc');
            
            if ($temp->num_rows()!=0){
                $this->db->where('IdP',$idp);
                $this->db->limit(1);
                $result2= $this->db->get('nocna');
                $r=$result2->row();
                
                $helper= $temp->row();
                $v= $helper->Vrsta;
                $k= $helper->Kolicina;
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
                
                $this->db->where('IdP', $idp);
                $this->db->update('nocna', $dataUpadate);
            }
            
            $this->db->where('IdP',$idp);
            $this->db->limit(1);
            $result= $this->db->get('nocna');
            
            $preostalo=0;
            $row=$result->row();
            $datum= $row->Datum;
            $dataUpadate = array( 'BrSto' => $preostalo );
            if ($vrsta=="sto"){
                if ($row->BrSto<$kolicina){
                   return false;
                } else {
                   $preostalo=$row->BrSto-$kolicina;
                   $dataUpadate = array(
                       'BrSto' => $preostalo
                   );
               }
            } else  if ($vrsta=="visoko"){
               if ($row->BrVisoko<$kolicina){
                   return false;
                } else {
                   $preostalo=$row->BrVisoko-$kolicina;
                   $dataUpadate = array(
                       'BrVisoko' => $preostalo
                   );
               }
            }else  if ($vrsta=="separe"){
               if ($row->BrSepare<$kolicina){
                   return false;
               } else {
                   $preostalo=$row->BrSepare-$kolicina;
                   $dataUpadate = array(
                       'BrSepare' => $preostalo
                   );
               }
            }
            
            $this->db->where('IdP', $idp);
            $this->db->update('Nocna', $dataUpadate);
            
           
                
            if ($temp->num_rows()==0){    
                $data = array(
                    'IdK' => $idk,
                    'IdP' =>$idp ,
                    'Vrsta'=> $vrsta,
                    'Kolicina' => $kolicina,
                    'Datum' => $datum   
                );
                $this->db->insert('rezervacijanoc', $data);
            } else { 
                $data = array(
                    'Vrsta'=> $vrsta,
                    'Kolicina' => $kolicina,
                    'Datum' => $datum   
                );
                $this->db->where('IdP', $idp);
                $this->db->where('IdK', $idk);
                $this->db->update('rezervacijanoc', $data);
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

            $temp= $this->db->get('rezervacijanoc');
            if ($temp->num_rows()==0){
                return false;
            } else {
                return true;
            }
        }
       
};


?>
