<?php
/**
 * @Ana Bozovic 397/14
 */
class dodajPonuduNocnaM extends CI_Model{
    
    public function setOffer($naziv, $opis, $lokacija, $preporuceno, $brojStolova, $brojVisokih, $datum,$brojSeparea,$slika1,$slika2,$slika3){
        $this->load->database();
        $path1=$slika1['full_path'];
        $path2=$slika2['full_path'];
        $path3=$slika3['full_path'];
        $imgData1= file_get_contents($path1);
        $imgData2= file_get_contents($path2);
        $imgData3= file_get_contents($path3);
        $prep=0;
        if ($preporuceno=="DA"){
            $prep=1;
        }
        $data1 = array(
         'Naziv' =>$naziv,
         'Opis' =>$opis ,
         'Lokacija' => $lokacija,
         'Preporuceno' => $prep,
         'Slika1' => $imgData1,
         'Slika2' => $imgData2,
         'Slika3' => $imgData3,
         'dn'     => 0
        );

        $this->db->insert('ponuda', $data1);

        $this->db->select_max('IdP');
        $this->db->limit(1);
        $result = $this->db->get('Ponuda');
        $res=$result->row();
        $id=$res->IdP;
        
        $data2 = array(
         'BrSto' =>$brojStolova,
         'BrVisoko' =>$brojVisokih ,
         'BrSepare' => $brojSeparea,
         'Datum' => $datum,
         'IdP'=>$id

        );

        $this->db->insert('nocna', $data2);
        unlink($path1);
        unlink($path2);
        unlink($path3);
        return true;
    }
       
};


?>