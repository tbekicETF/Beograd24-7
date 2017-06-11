<?php 
/**
 * @Ana Bozovic 397/14
 */
?>

<?php include_once('templates/header.php'); ?>
<?php include_once('templates/menu.php'); ?>

<head>
    <title>Jedna vrsta ponuda</title>
</head>
    
<div class="wrapper row3">
    <main class="hoc container clear">
        <?php
            $brojPonuda = $brojPonudaDan + $brojPonudaNoc;
            $brd = 0;
            $brn = 0;
            for ($i = 0; $i < $brojPonuda;) { 
        ?>
            <ul class="nospace group">
                <?php 
                   // for ($j = 0; $j < 3; $j++)
                    //{
                        if ($i < $brojPonuda) { 
                            if ($brd < $brojPonudaDan) {
                ?>
                    <li class="one_third first">
                        <article>
                            <?php echo $slikeDan[$brd] ?>
                            <?php 
                                $naz = $ponDan[$brd]->Naziv;
                                $id = $ponDan[$brd]->IdP;
                                $dat = $rezDan[$brd]->Datum;
                                $kol = $rezDan[$brd]->Kolicina;
                                
                            ?>
                            <br><br>
                            <h6 class="heading font-x1"><b><?php echo $naz; ?></b></h6>
                            <?php echo $dat; ?>
                            <br>
                            Broj karata:&nbsp; <?php echo $kol; ?>
                            <br><br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/otkazivanjeDan/index/<?php echo urlencode(base64_encode($id))?>">Otkaži &rsaquo;</a></footer>
                            <br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/rezervacijaDan/index/<?php echo urlencode(base64_encode($id))?>">Promeni &rsaquo;</a></footer>
                        <br><br><br>
                        </article>
                    </li>
                <?php $brd++; } else { ?>
                    <li class="one_third first">
                        <article>
                            <?php echo $slikeNoc[$brn] ?>
                            <?php 
                                $naz = $ponNoc[$brn]->Naziv;
                                $id = $ponNoc[$brn]->IdP;
                                $dat = $rezNoc[$brn]->Datum;
                                $vrsta = $rezNoc[$brn]->Vrsta;
                                $kol = $rezNoc[$brn]->Kolicina;
                                
                            ?>
                            <br><br>
                            <h6 class="heading font-x1"><b><?php echo $naz; ?></b></h6>
                            <?php echo $dat; ?>
                            <br>
                            Vrsta rezervacije:&nbsp; <?php echo $vrsta; ?>
                            <br>
                            Kolicina:&nbsp; <?php echo $kol; ?>
                            <br><br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/otkazivanjeNoc/index/<?php echo urlencode(base64_encode($id))?>">Otkaži &rsaquo;</a></footer>
                            <br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/rezervacijaNoc/index/<?php echo urlencode(base64_encode($id))?>">Promeni &rsaquo;</a></footer>
                        <br><br><br>
                        </article>
                    </li>
                <?php $brn++; } ?>    
                <?php } $i++; ?>
         <?php //} ?>
                     <?php 
                   // for ($j = 0; $j < 3; $j++)
                    //{
                        if ($i < $brojPonuda) { 
                            if ($brd < $brojPonudaDan) {
                ?>
                    <li class="one_third">
                        <article>
                            <?php echo $slikeDan[$brd] ?>
                            <?php 
                                $naz = $ponDan[$brd]->Naziv;
                                $id = $ponDan[$brd]->IdP;
                                $dat = $rezDan[$brd]->Datum;
                                $kol = $rezDan[$brd]->Kolicina;
                                
                            ?>
                            <br><br>
                            <h6 class="heading font-x1"><b><?php echo $naz; ?></b></h6>
                            <?php echo $dat; ?>
                            <br>
                            Broj karata:&nbsp; <?php echo $kol; ?>
                            <br><br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/otkazivanjeDan/index/<?php echo urlencode(base64_encode($id))?>">Otkaži &rsaquo;</a></footer>
                            <br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/rezervacijaDan/index/<?php echo urlencode(base64_encode($id))?>">Promeni &rsaquo;</a></footer>
                        <br><br><br>
                        </article>
                    </li>
                <?php $brd++; } else { ?>
                    <li class="one_third">
                        <article>
                            <?php echo $slikeNoc[$brn] ?>
                            <?php 
                                $naz = $ponNoc[$brn]->Naziv;
                                $id = $ponNoc[$brn]->IdP;
                                $dat = $rezNoc[$brn]->Datum;
                                $vrsta = $rezNoc[$brn]->Vrsta;
                                $kol = $rezNoc[$brn]->Kolicina;
                                
                            ?>
                            <br><br>
                            <h6 class="heading font-x1"><b><?php echo $naz; ?></b></h6>
                            <?php echo $dat; ?>
                            <br>
                            Vrsta rezervacije:&nbsp; <?php echo $vrsta; ?>
                            <br>
                            Kolicina:&nbsp; <?php echo $kol; ?>
                            <br><br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/otkazivanjeNoc/index/<?php echo urlencode(base64_encode($id))?>">Otkaži &rsaquo;</a></footer>
                            <br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/rezervacijaNoc/index/<?php echo urlencode(base64_encode($id))?>">Promeni &rsaquo;</a></footer>
                        <br><br><br>
                        </article>
                    </li>
                <?php $brn++; } ?>    
                <?php } $i++; ?>
         <?php //} ?>
                     <?php 
                   // for ($j = 0; $j < 3; $j++)
                    //{
                        if ($i < $brojPonuda) { 
                            if ($brd < $brojPonudaDan) {
                ?>
                    <li class="one_third">
                        <article>
                            <?php echo $slikeDan[$brd] ?>
                            <?php 
                                $naz = $ponDan[$brd]->Naziv;
                                $id = $ponDan[$brd]->IdP;
                                $dat = $rezDan[$brd]->Datum;
                                $kol = $rezDan[$brd]->Kolicina;
                                
                            ?>
                            <br><br>
                            <h6 class="heading font-x1"><b><?php echo $naz; ?></b></h6>
                            <?php echo $dat; ?>
                            <br>
                            Broj karata:&nbsp; <?php echo $kol; ?>
                            <br><br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/otkazivanjeDan/index/<?php echo urlencode(base64_encode($id))?>">Otkaži &rsaquo;</a></footer>
                            <br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/rezervacijaDan/index/<?php echo urlencode(base64_encode($id))?>">Promeni &rsaquo;</a></footer>
                        <br><br><br>
                        </article>
                    </li>
                <?php $brd++; } else { ?>
                    <li class="one_third">
                        <article>
                            <?php echo $slikeNoc[$brn] ?>
                            <?php 
                                $naz = $ponNoc[$brn]->Naziv;
                                $id = $ponNoc[$brn]->IdP;
                                $dat = $rezNoc[$brn]->Datum;
                                $vrsta = $rezNoc[$brn]->Vrsta;
                                $kol = $rezNoc[$brn]->Kolicina;
                                
                            ?>
                            <br><br>
                            <h6 class="heading font-x1"><b><?php echo $naz; ?></b></h6>
                            <?php echo $dat; ?>
                            <br>
                            Vrsta rezervacije:&nbsp; <?php echo $vrsta; ?>
                            <br>
                            Kolicina:&nbsp; <?php echo $kol; ?>
                            <br><br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/otkazivanjeNoc/index/<?php echo urlencode(base64_encode($id))?>">Otkaži &rsaquo;</a></footer>
                            <br>
                            <footer><a class="btn" href="http://localhost/PSIproject/index.php/rezervacijaNoc/index/<?php echo urlencode(base64_encode($id))?>">Promeni &rsaquo;</a></footer>
                        <br><br><br>
                        </article>
                    </li>
                <?php $brn++; } ?>    
                <?php } $i++; ?>
         <?php //} ?>
                    </ul>
        <?php }?>
       
        <div class="clear"></div>
    </main>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 

<?php include_once('templates/footer.php'); ?>

</body>
</html>