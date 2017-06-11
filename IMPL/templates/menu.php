<!--<!DOCTYPE html>
<?php 
/**
 * @Tijan Bekic 335/14
 */
?>
<html lang="">
<head>
    <title>menu</title>
</head>

<body id="top">-->

<div class="wrapper row2">
    <nav id="mainav" class="hoc clear">
        <ul class="clear">
            <li class="active"><a href='http://localhost/PSIproject/index.php/Pocetna'><b>POCETNA</b></a></li>
            <li><a class="drop" href="http://localhost/PSIproject/index.php/svePonude/index2"><b>PONUDE</b></a>
                <ul>
                    <li><a href="http://localhost/PSIproject/index.php/jednaVrstaPonudaDan/index/<?php echo urlencode(base64_encode('znam'))?>">Znamenitosti</a></li>
                    <li><a href="http://localhost/PSIproject/index.php/jednaVrstaPonudaDan/index/<?php echo urlencode(base64_encode('priroda'))?>">Sadrzaj u prirodi</a></li>
                    <li><a href="http://localhost/PSIproject/index.php/jednaVrstaPonudaDan/index/<?php echo urlencode(base64_encode('zabava'))?>">Zabava</a></li>
                    <li><a href="http://localhost/PSIproject/index.php/jednaVrstaPonudaNoc">Noćni život</a></li>
                    <li><a href="http://localhost/PSIproject/index.php/jednaVrstaPonudaDan/index/<?php echo urlencode(base64_encode('spec'))?>">Specijalne ponude</a></li>
                </ul>
            </li>
            <?php 
                $f = $this->session->userdata('isAdmin');
                if ($f != NULL && $f == 2) {
            ?>
                <li><a class="drop"><b>DODAJ PONUDU</b></a>
                    <ul>
                        <li><a href='http://localhost/PSIproject/index.php/dodajPonuduDnevna'>Dnevna</a></li>
                        <li><a href='http://localhost/PSIproject/index.php/dodajPonuduNocna'>Noćna</a></li>
                    </ul>
                </li>
            <?php } else { ?>
            <li><a href="http://localhost/PSIproject/index.php/topDeset"><b>TOP 10 MESTA</b></a></li>
            <li><a href="http://localhost/PSIproject/index.php/izdvojeno"><b>IZDVAJAMO IZ PONUDE</b></a></li>
            <li><a href="http://localhost/PSIproject/index.php/mojeRez"><b>MOJE REZERVACIJE</b></a></li>
            <li><a href="http://localhost/PSIproject/index.php/kontakt"><b>KONTAKT</b></a></li>
            <?php } ?>
        </ul>
    </nav>
</div>

<hr>

<!--</body>
</html>-->