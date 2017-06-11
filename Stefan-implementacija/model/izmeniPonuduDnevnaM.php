<?php
/**
 * @Stefan Djordjevic 467/14
 */
class izmeniPonuduDnevnaM extends CI_Model{
    
    public function setOffer($naziv, $opis, $lokacija, $preporuceno, $rezervacija, $brojMesta, $datum, $vrsta,$idponude, $s1, $s2, $s3){
        $this->load->database();
        $path1=$s1['full_path'];
        $path2=$s2['full_path'];
        $path3=$s3['full_path'];
        $imgData1= file_get_contents($path1);
        $imgData2= file_get_contents($path2);
        $imgData3= file_get_contents($path3);
        $prep=0;
        if ($preporuceno=="DA"){ $prep=1;}
        
        $data1 = array(
         'Naziv' =>$naziv,'Opis' =>$opis , 'Lokacija' => $lokacija,'Preporuceno' => $prep,
         'Slika1' => $imgData1,'Slika2' => $imgData2,'Slika3' => $imgData3
        );
        
        $this->db->where('IdP', $idponude);
        $this->db->update('ponuda', $data1); 
        
        $rez=0;
        if ($rezervacija=="DA"){$rez=1;}
        
        $data2 = array(
         'MozeRez' =>$rez,'BrMesta' =>$brojMesta ,'Datum' => $datum,
         'Vrsta' => $vrsta,'IdP'=>$idponude
        );

        $this->db->where('IdP', $idponude);
        $this->db->update('ponudadan', $data2);
        unlink($path1);
        unlink($path2);
        unlink($path3);
        return true;
    }
       
};


?>