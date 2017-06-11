<?php 
/**
 * @Irina Mirkovic 141/14
 */
?>
<html>
    <head>
        <title>Otkazi rezervaciju</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/PSIproject/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">    
    </head>
    
    <body>

        <div class="wrapper row3">
            <main class="hoc container clear">
                <div class="content"> 

                    <center> 

                        <label>Da li ste sigurni da želite da otkažete rezervaciju?</label>
                        <br>
                        <input type="button" class="btn" value="DA" onclick="window.location.href='http://localhost/PSIproject/index.php/otkazivanjeDan/otkazi'">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="button" class="btn" value="NE" onclick="window.location.href='http://localhost/PSIproject/index.php/mojeRez'">
                    </center>

                </div>
            </main>
        </div>
        <div class="clear"></div>

        <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

    </body>
</html>