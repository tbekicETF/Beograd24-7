<?php 
/**
 * @Irina Mirkovic 141/14
 */
?>
<?php include_once('templates/header.php'); ?>
<?php include_once('templates/menu.php'); ?>

<head>
    <title>Logovanje</title>
</head>
  
<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="content"> 
      
            <?php echo form_open('Logovanje/checkLogin'); ?>
                <center> 
	            <div class="forma">
		        <label for="ime">Korisničko ime: </label>
		        <input type="text" name="ime" id="ime" value="" size="20" required>
		        <br>
		     
		        <label for="lozinka">Lozinka: </label>
		        <input type="password" name="lozinka" id="lozinka" value="" size="20" required>
		        <br>
		        <a href='http://localhost/PSIproject/index.php/zaboravljenaLozinka' size="10"> Zaboravljena lozinka? </a>
		        <br><br>
		    </div>
                    <input type="submit" class="btn" value="Prijavi se">
                    &nbsp;
                    
                    
                    <br><br>
                    <?php if ($ispis == 1) { ?>
                        <font color="red" size="3" face="verdana">Ne možete da pristupite svojim rezervacijama ukoliko niste ulogovani.</font>
                    <?php } ?>
                    <font color="red" size="3" face="verdana"><?php echo validation_errors(); ?></font>
         
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