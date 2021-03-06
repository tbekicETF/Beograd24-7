<?php 
/**
 * @Stefan Djordjevic 467/14
 */
?>
<?php include_once('templates/header.php'); ?>
<?php include_once('templates/menu.php'); ?>

<head>
    <title>Dodaj dnevnu ponudu</title>
</head>

<div class="wrapper row3">
  <main class="hoc container clear">
    <div class="content"> 
      
        
        <?php echo form_open_multipart('dodajPonuduDnevna/checkOffer'); ?>
          <div class="forma">
            <div class="one_half first">          
              
                  <label for="naziv">Naziv ponude: </label>
                  <input type="text" name="naziv" id="naziv" value="" size="40" required>
                  <br>
           
                  <label for="lokacija">Lokacija: </label>
                  <input type="text" name="lokacija" id="lokacija" value="" size="30" required>
                  <br>

                  <div class="izgled">
                       <label>Vrsta ponude:</label>
                      <select name="vrsta" size="1">
                        <option value="izaberi">Izaberi</option>
                        <option value="znam">Znamenitosti</option>
                        <option value="priroda">Sadržaj u prirodi</option>
                        <option value="zabava">Zabava</option>
                        <option value="spec">Specijalne ponude</option>
                      </select> 
                      <br>

                      <label for="preporuceno">Preporučeno: </label>
                      <br>
                    
                        <input type="radio" name="preporuceno" <?php if (isset($preporuceno) && $preporuceno == "DA") echo "checked"; ?> value="DA" required>
                        <label for="preporuceno">DA</label>
                      <br>
                        <input type="radio" name="preporuceno" <?php if (isset($preporuceno) && $preporuceno == "NE") echo "checked"; ?> value="NE" required>
                        <label for="preporuceno">NE</label>
                        
                        
                      
                      <br><br>


                      <label for="rezervacija">Rezervacija: </label>
                      <br>

                        <input type="radio" name="rezervacija" <?php if (isset($rezervacija) && $rezervacija == "DA") echo "checked"; ?> value="DA" required>
                        <label for="rezervacija">DA</label>
                      <br>
                        <input type="radio" name="rezervacija" <?php if (isset($rezervacija) && $rezervacija == "DA") echo "checked"; ?> value="NE" required>
                        <label for="rezervacija">NE</label>
                      <br><br>

                      <label for="brojMesta">Broj mesta: </label>
                      <br>
                        <input type="text" name="brojMesta" id="brojMesta" value="" size="5" required>
                      
                      <br><br>

                      <label for="datum">Datum: </label>
                      <br>
                        <input type="date" name="datum" id="datum" required>
                      

                  </div>
              
                
            </div>
            
            <div class="one_half">
              <div class="forma">
                <div class="izgled">
                  
                  <label>Opis ponude:</label>
                  <textarea name="opis" id="opis" cols="40" rows="20" required></textarea>
                  <br>

                  <label>Dodaj slike:</label>
                  <br>
                  <input type="file" name="slika1" id="slika1" size="40">
                  <br><br>
                  <input type="file" name="slika2" id="slika2" size="40">
                  <br><br>
                  <input type="file" name="slika3" id="slika3" size="40">
                  

                </div>
              </div>

              
              <br><br>
              <input type="submit" class="btn" value="DODAJ">
              <input type="button" class="btn" value="ODUSTANI" onclick="window.location.href='http://localhost/PSIproject/index.php/sveVrstePonuda'">
              &nbsp;
            </div>
               <br><br> <br><br>
             <div class="center">
                
                <font color="red" size="3" face="verdana"><?php echo validation_errors(); ?></font>
            </div>
          </div>
           
          <?php echo form_close(); ?>
    </div>
    <div class="clear"></div>
  
  </main>
</div>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 

<?php include_once('templates/footer.php'); ?>

</body>
</html>