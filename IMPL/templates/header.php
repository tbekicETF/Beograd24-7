<!DOCTYPE html>
<?php 
/**
 * @Tijan Bekic 335/14
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="http://localhost/PSIproject/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

<div class="wrapper row1">
    <header id="header" class="hoc clear"> 
        <div id="logo" class="fl_left">
            <a href='http://localhost/PSIproject/index.php/sveVrstePonuda'><img src='http://localhost/PSIproject/images/slike.png'></a>
        </div>
    </header>
</div>


<div class="wrapper row1">
    <header id="header" class="hoc clear">
        <div id="topbar" class="hoc clear"> 
            
            <div id="logo" class="fl_left">
                <div class="pozadina">
                    <a href='http://localhost/PSIproject/index.php/sveVrstePonuda'><img src='http://localhost/PSIproject/images/logo.png'></a>
                </div>
            </div>

            <div class="fl_right">
                <ul>
                    <li><a href='http://localhost/PSIproject/index.php/sveVrstePonuda'><i class="fa fa-lg fa-home"></i></a></li>
                    <?php
                        //$username = $_SESSION['username'];
                        
                        $username = $this->session->userdata('username');
                        
                        if ($username != "") {
                    ?>
                        <li><?php echo $username ?></li>
                        <li><a href='http://localhost/PSIproject/index.php/logout'>Log out</a></li>
                    <?php } else {?>
                        <li><a href='http://localhost/PSIproject/index.php/logovanje'>Login</a></li>
                        <li><a href='http://localhost/PSIproject/index.php/registracija'>Registruj se</a></li>
                    <?php } ?>
                </ul>
            </div>

        </div>
    </header>
</div>

<hr>