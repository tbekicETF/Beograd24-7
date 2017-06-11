<?php 
/**
 * @Ana Bozovic 397/14
 */
?>
<?php include_once('templates/header.php'); ?>
<?php include_once('templates/menu.php'); ?>

<head>
    <title>Sve vrste ponuda</title>
</head>

<div class="wrapper row3">
    <main class="hoc container clear">
        <ul class="nospace group">
            <li class="one_third first">
                <article><i class="btmspace-30 fa fa-3x fa-university"></i>
                    <h6 class="heading font-x1"><b>Znamenitosti</b></h6>
                    <p class="btmspace-30">Beograd se mnogo razvijao i bio pod različitim uticajima, sa svim svojim znamenitostima odoleva vekovima unazad na ušću dveju reka...<br/><br/><br/></p>
                    <footer><a class="btn" href="http://localhost/PSIproject/index.php/jednaVrstaPonudaDan/index/<?php echo urlencode(base64_encode('znam'))?>">Saznaj više &rsaquo;</a></footer>
                </article>
            </li>
            <li class="one_third">
                <article><i class="btmspace-30 fa fa-3x fa-tree"></i>
                    <h6 class="heading font-x1"><b>Sadržaj u prirodi</b></h6>
                    <p class="btmspace-30">Beograd kao spomenik prirode, čije zeleno blago čine Kalemegdan, Tašmajdan, Avala, Topčider, Košutnjak... U sred šume zgrada, solitera i bulevara nalaze se i pravi prirodni rezervati kao Botanička bašta ili Veliko ratno ostrvo...<br/></p>
                    <footer><a class="btn" href="http://localhost/PSIproject/index.php/jednaVrstaPonudaDan/index/<?php echo urlencode(base64_encode('priroda'))?>">Saznaj više &rsaquo;</a></footer>
                </article>
            </li>
            <li class="one_third">
            <article><i class="btmspace-30 fa fa-3x fa-futbol-o"></i>
                <h6 class="heading font-x1"><b>Zabava</b></h6>
                <p class="btmspace-30">Beogradski noćni život u stvari počinje danju, psihološkom pripremom u vidu sedenja u nekom od brojnih kafića. Jedna od beogradskih tajni je kako je svakog dana, usred radnog vremena, većina beogradskih kafića puna.</p>
                <footer><a class="btn" href="http://localhost/PSIproject/index.php/jednaVrstaPonudaDan/index/<?php echo urlencode(base64_encode('zabava'))?>">Saznaj više &rsaquo;</a></footer>
            </article>
            </li>
        </ul>
        <ul><br/><br/></ul>
        <ul class="nospace group">
            <li class="one_third first">
                <article><i class="btmspace-30 fa fa-3x fa-glass"></i>
                    <h6 class="heading font-x1"><b>Noćni život</b></h6>
                    <p class="btmspace-30">Noćni život možda ostavlja najjači utisak na posetioce koji su prvi put u gradu. Razlog za to je pre svega duh Beograđana i pozitivna atmosfera zbog koje se osećate kao da ste kod kuće, među prijateljima.</p>
                    <footer><a class="btn" href="http://localhost/PSIproject/index.php/jednaVrstaPonudaNoc">Saznaj više &rsaquo;</a></footer>
                </article>
            </li>
            <li class="one_third">
                <article><i class="btmspace-30 fa fa-3x fa-star"></i>
                    <h6 class="heading font-x1"><b>Specijalne ponude</b></h6>
                    <p class="btmspace-30">Beograd kao paviljon umetnosti u kome se događaju FEST, BELEF, BITEF, Sajam knjiga, Radost Evrope kao i mnoge druge manifestacije čine ga posebnim...<br/><br/></p>
                    <footer><a class="btn" href="http://localhost/PSIproject/index.php/jednaVrstaPonudaDan/index/<?php echo urlencode(base64_encode('spec'))?>">Saznaj više &rsaquo;</a></footer>
                </article>
            </li>
        </ul>
        <div class="clear"></div>
    </main>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 

<?php include_once('templates/footer.php'); ?>

</body>
</html>

