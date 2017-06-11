<?php 
/**
 * @Ana Bozovic 397/14
 */
?>
<?php include_once('templates/header.php'); ?>
<?php include_once('templates/menu.php'); ?>

<head>
<title>Jedna ponuda</title>
<link href="http://localhost/PSIproject/layout/styles/w3.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

<div class="wrapper row3">
    <main class="hoc container clear">
        <div class="content">
      
            <div class="two_third first">
                <div class="w3-content w3-display-container">
                    <!--<img class="mySlides" src='http://localhost/PSIproject/images/img1.png'>
                    <img class="mySlides" src='http://localhost/PSIproject/images/img2.png'>
                    <img class="mySlides" src='http://localhost/PSIproject/images/img3.png'>-->
                    <?php
                        echo $s1;
                        echo $s2;
                        echo $s3;
                    ?>

                    <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                </div>
                
                <br>
                
                <div class="two_third first">
                    <label id="naziv"><?php echo $pon[0]->Naziv; ?></label>
                    <br>
                    <label id="lokacija"><?php echo $pon[0]->Lokacija; ?></label>
                </div>

                <div class="one_third" first>
                    <div class="desno">
                        <i class="btmspace-30 fa fa-star-o"></i>
                        <i class="btmspace-30 fa fa-star-o"></i>
                        <i class="btmspace-30 fa fa-star-o"></i>
                        
                        &nbsp;&nbsp;&nbsp;<?php
                            if ($pon[1]!=NULL)
                                echo $pon[1]->Ocena;
                            else
                                echo '/';
                        ?>
                        <br>
                    </div>
                </div>    
              

                <div class="two_third first">
                <br>
                <?php 
                    $id = $pon[0]->IdP;
                    $v = $pon[0]->dn;
                    $f = $this->session->userdata('isAdmin');
                    if ($f != NULL && $f == 2) {
                        if ($v == 1) {
                    ?>
                        <input type="button" class="btn" value="Izmeni ponudu" onclick="window.location.href='http://localhost/PSIproject/index.php/izmeniPonuduDnevna/index/<?php echo urlencode(base64_encode($id))?>'">
                        </div>
                        <div class="one_third" first>
                            <div class="desno">
                              <br>
                              &nbsp;&nbsp;&nbsp;
                              <input type="button" class="btn" value="Obriši ponudu" onclick="window.location.href='http://localhost/PSIproject/index.php/obrisiPonuduDnevna/index/<?php echo urlencode(base64_encode($id))?>'">
                            </div>
                        </div>
                    <?php } else { ?>
                        <input type="button" class="btn" value="Izmeni ponudu" onclick="window.location.href='http://localhost/PSIproject/index.php/izmeniPonuduNocna/index/<?php echo urlencode(base64_encode($id))?>'">
                        </div>
                        <div class="one_third" first>
                            <div class="desno">
                              <br>
                              &nbsp;&nbsp;&nbsp;
                              <input type="button" class="btn" value="Obriši ponudu" onclick="window.location.href='http://localhost/PSIproject/index.php/obrisiPonuduNocna/index/<?php echo urlencode(base64_encode($id))?>'">
                            </div>
                        </div>
                    <?php
                        } } else if ($f != NULL && $f == 1){
                                if ($v ==0) {
                    ?>
                    
                        <input type="button" class="btn" value="Rezerviši" onclick="window.location.href='http://localhost/PSIproject/index.php/rezervacijaNoc/index/<?php echo urlencode(base64_encode($id))?>'">
                        <?php 
                            } else {
                                $rez = $pon[2]->MozeRez;
                                if ($rez == 1) {
                        ?>
                        <input type="button" class="btn" value="Rezerviši" onclick="window.location.href='http://localhost/PSIproject/index.php/rezervacijaDan/index/<?php echo urlencode(base64_encode($id))?>'">
                            <?php } } ?>
                        </div>
                        <div class="one_third" first>
                            <div class="desno">
                              <br>
                              &nbsp;&nbsp;&nbsp;
                              <input type="button" class="btn" value="Oceni" onclick="window.location.href='http://localhost/PSIproject/index.php/ocenjivanje/index/<?php echo urlencode(base64_encode($id))?>'">
                            </div>
                        </div>
                    <?php } else { ?>
                        <input style="visibility:hidden;" type="button" class="btn" value="Rezerviši" onclick="window.location.href='http://localhost/PSIproject/index.php/rezervacijaDan/index/<?php echo urlencode(base64_encode($id))?>'">
                        </div>
                        <div class="one_third" first>
                            <div class="desno">
                              <br>
                              &nbsp;&nbsp;&nbsp;
                              <input style="visibility:hidden;" type="button" class="btn" value="Oceni" onclick="window.location.href='http://localhost/PSIproject/index.php/ocenjivanje/index/<?php echo urlencode(base64_encode($id))?>'">
                            </div>
                        </div>
                    <?php } ?>
                


                
            </div>

            <div class="one_third">
                <p>
                    <?php echo $pon[0]->Opis; ?>
                    <br><br><br>
                    <?php if ($datum!="1995-03-29 00:00:00") { ?>
                    
                    Datum:&nbsp;&nbsp;  <?php echo $datum ?>
                    
                    <?php } ?>
                </p>
            </div>
                
        </div>
      
        <div class="clear"></div>
        
    </main>
</div>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 

<?php include_once('templates/footer.php'); ?>

<!-- JAVASCRIPTS --> 
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }
</script>

</body>
</html>