<?php 
/**
 * @Irina Mirkovic 141/14
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
      
        

       <?php echo form_open('rezervacijaDan/checkForm'); ?>
         <center> 
	         
	            <div class="forma">
		            <label for="brojKarata">Broj karata: </label>
		            <input type="text" name="brojKarata" id="brojKarata" value="" size="20" required>
		         	<br>
		     
		            
		        </div>
		            <input type="submit" class="btn" value="Rezerviši">
	            	&nbsp;
	            
	        
          </center>
        <?php echo form_close(); ?>
      </div>
    
    <div class="clear"></div>
  </main>
</div>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 

<?php include_once('templates/footer.php'); ?>

</body>
</html>