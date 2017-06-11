<?php 
/**
 * @Ana Bozovic 397/14
 */
?>
<?php include_once('templates/header.php'); ?>
<?php include_once('templates/menu.php'); ?>

<head>
    <title>Registracija</title>
</head>
    
<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="content"> 
       
        <?php echo form_open('registracija/checkRegistration'); ?>
            <center> 
                <div class="forma">
                    <label for="ime">Ime: </label>
                    <input type="text" name="ime" id="ime" value="" size="20" required>
                    <br>

                    <label for="prezime">Prezime: </label>
                    <input type="text" name="prezime" id="prezime" value="" size="20" required>
                    <br>
         
                    <label for="korisnicko">Korisnicko ime: </label>
                    <input type="text" name="korisnicko" id="korisnicko" value="" size="20" required>
                    <br>

                    <label for="lozinka">Lozinka: </label>
                    <input type="password" name="lozinka" id="lozinka" value="" size="20" required>
                    <br>
                
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email" value="" size="22" required>
            
                    <br>
                </div>
                <input type="submit" class="btn" value="Registruj se">
                &nbsp;
              
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