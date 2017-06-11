<?php 
/**
 * @Tijana Bekic 335/14
 */
?>
<?php include_once('templates/header.php'); ?>
<?php include_once('templates/menu.php'); ?>

<head>
    <title>Jedna vrsta ponuda</title>
</head>
    
<div class="wrapper row3">
    <main class="hoc container clear">
         <?php  //echo $brojPonuda; ?>
        <?php for ($i = 0; $i < $brojPonuda;) { ?>
            <ul class="nospace group">
                <?php if ($i < $brojPonuda) { ?>
                    <li class="one_third first">
                        <article>
                            <?php echo $slike[$i]; ?>
                            <br>
                            <?php $naz = $pon[$i]->Naziv;
                                  $id=$pon[$i]->IdP;
                            ?>
                            <br>
                            <h6 class="heading font-x1"><b><?php echo $naz; ?></b></h6>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/jednaPonuda/index/<?php echo urlencode(base64_encode($id))?>">Saznaj više &rsaquo;</a></footer>
                            
                            <?php 
                                $f = $this->session->userdata('isAdmin');
                                $v = $pon[$i]->dn;
                                if ($f != NULL && $f == 2) {
                                    if ($v == 1) {
                            ?>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/izmeniPonuduDnevna/index/<?php echo urlencode(base64_encode($id))?>">Izmeni ponudu &rsaquo;</a></footer>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/obrisiPonuduDnevna/index/<?php echo urlencode(base64_encode($id))?>">Obriši ponudu &rsaquo;</a></footer>
                            <?php } else { ?>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/izmeniPonuduNocna/index/<?php echo urlencode(base64_encode($id))?>">Izmeni ponudu &rsaquo;</a></footer>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/obrisiPonuduNocna/index/<?php echo urlencode(base64_encode($id))?>">Obriši ponudu &rsaquo;</a></footer>
                            <?php } } ?>
                                <br><br><br>
                        </article>
                    </li>
                <?php } $i++; ?>
                <?php if ($i < $brojPonuda) { ?>
                    <li class="one_third">
                        <article>
                            <?php //$naz = "linkPonude".$i; ?>
                             <?php echo $slike[$i]; ?>
                            <br><br>
                            <?php $naz = $pon[$i]->Naziv;
                                  $id=$pon[$i]->IdP;
                            ?>
                            <h6 class="heading font-x1"><b><?php echo $naz; ?></b></h6>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/jednaPonuda/index/<?php echo urlencode(base64_encode($id))?>">Saznaj više &rsaquo;</a></footer>
                        
                            <?php 
                                $f = $this->session->userdata('isAdmin');
                                $v = $pon[$i]->dn;
                                if ($f != NULL && $f == 2) {
                                    if ($v == 1) {
                            ?>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/izmeniPonuduDnevna/index/<?php echo urlencode(base64_encode($id))?>">Izmeni ponudu &rsaquo;</a></footer>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/obrisiPonuduDnevna/index/<?php echo urlencode(base64_encode($id))?>">Obriši ponudu &rsaquo;</a></footer>
                            <?php } else { ?>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/izmeniPonuduNocna/index/<?php echo urlencode(base64_encode($id))?>">Izmeni ponudu &rsaquo;</a></footer>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/obrisiPonuduNocna/index/<?php echo urlencode(base64_encode($id))?>">Obriši ponudu &rsaquo;</a></footer>
                            <?php } } ?>
                                <br><br><br>
                        </article>
                    </li>
                <?php } $i++; ?>
                <?php if ($i < $brojPonuda) { ?>
                    <li class="one_third">
                        <article>
                            <?php //$naz = "linkPonude".$i; ?>
                             <?php echo $slike[$i]; ?>
                            <br><br>
                            <?php $naz = $pon[$i]->Naziv;
                                  $id=$pon[$i]->IdP;
                            ?>
                            <h6 class="heading font-x1"><b><?php echo $naz; ?></b></h6>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/jednaPonuda/index/<?php echo urlencode(base64_encode($id))?>">Saznaj više &rsaquo;</a></footer>
                        
                            <?php 
                                $f = $this->session->userdata('isAdmin');
                                $v = $pon[$i]->dn;
                                if ($f != NULL && $f == 2) {
                                    if ($v == 1) {
                            ?>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/izmeniPonuduDnevna/index/<?php echo urlencode(base64_encode($id))?>">Izmeni ponudu &rsaquo;</a></footer>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/obrisiPonuduDnevna/index/<?php echo urlencode(base64_encode($id))?>">Obriši ponudu &rsaquo;</a></footer>
                            <?php } else { ?>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/izmeniPonuduNocna/index/<?php echo urlencode(base64_encode($id))?>">Izmeni ponudu &rsaquo;</a></footer>
                                <br>
                                <footer><a class="btn" href="http://localhost/PSIproject/index.php/obrisiPonuduNocna/index/<?php echo urlencode(base64_encode($id))?>">Obriši ponudu &rsaquo;</a></footer>
                            <?php } } ?>
                                <br><br><br>
                        </article>
                    </li>
                <?php } $i++; ?>
            </ul>
        <?php } ?>
       
        <div class="clear"></div>
    </main>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 

<?php include_once('templates/footer.php'); ?>

</body>
</html>