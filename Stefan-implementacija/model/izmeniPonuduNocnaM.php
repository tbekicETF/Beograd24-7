<?php
/**
 * @Stefan Djordjevic 467/14
 */
class izmeniPonuduNocnaM extends CI_Model{
    
    public function setOffer($naziv, $opis, $lokacija, $preporuceno, $brojStolova, $brojVisokih, $datum,$brojSeparea, $idponude,$slika1, $slika2, $slika3){
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
         'Slika1' =>  $imgData1,
         'Slika2' =>  $imgData2,
         'Slika3' => $imgData3
        );

        $this->db->where('IdP', $idponude);
        $this->db->update('ponuda', $data1); 

        
        
        $data2 = array(
         'BrSto' =>$brojStolova,
         'BrVisoko' =>$brojVisokih ,
         'BrSepare' => $brojSeparea,
         'Datum' => $datum,
         'IdP'=>$idponude

        );

        $this->db->where('IdP', $idponude);
        $this->db->update('nocna', $data2); 
        unlink($path1);
        unlink($path2);
        unlink($path3);
        return true;
    }
       
};


?>