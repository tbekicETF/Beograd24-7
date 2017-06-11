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

<div class ="prozorce">
    <div class="wrapper row3">
      <main class="hoc container clear">
        <div class="content"> 


            <div class="center">

                    Oceni:
                    <?php echo form_open('ocenjivanje/checkForm'); ?>
                    <center>
                    <select name="ocena" size="1" class="center">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10" selected>10</option>
                    </select> 
                    </center>

                    
                    <br><br>

                    <input type="submit" class="btn" value="Oceni">
                    <br><br>
                    <input type="button" class="btn" value="Odustani">
                    <?php echo form_close(); ?>
            </div>

        </div>

            <div class="clear"></div>

      </main>
    </div>
</div>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 

<?php include_once('templates/footer.php'); ?>

</body>
</html>