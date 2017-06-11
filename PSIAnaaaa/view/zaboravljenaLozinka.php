<?php 
/**
 * @Ana Bozovic 397/14
 */
?>
<?php include_once('templates/header.php'); ?>

<head>
    <title>Logovanje</title>
</head>
  
<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="content"> 
      
            <?php echo form_open('zaboravljenaLozinka/checkPass'); ?>
                <center> 
	            <div class="forma">
		        <label for="ime">Korisničko ime: </label>
		        <input type="text" name="ime" id="ime" value="" size="20" required>
		        <br>
		     
		        <label for="mail">Mail: </label>
		        <input type="text" name="mail" id="mail" value="" size="20" required>
		        
		        
		        <br><br>
		    </div>
                    <input type="submit" class="btn" value="Pošalji lozinku">
                    &nbsp;
                    
                    
                    <br><br>           
                    <?php
                    if ($flag == 1)
                    {
                        ?>
                        <font color="black" size="3" face="verdana">Lozinka će biti poslata na vaš mail.</font>
                    <?php
                    }
                    else if ($flag == 2)
                    {
                    ?>
                        <font color="black" size="3" face="verdana">Niste uneli dobro korisničko ime i mail. Pokušajte ponovo.</font>
                    
                    <?php     
                    }   
                    ?>  
	        </center>
            <?php echo form_close(); ?>
            
        </div>
    </main>
</div>
<div class="clear"></div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 

<?php include_once('templates/footer.php'); ?>

</body>
</html>