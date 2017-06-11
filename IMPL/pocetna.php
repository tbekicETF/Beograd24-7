<?php 
/**
 * @Tijana Bekic 335/14
 */
?>
<?php include_once('templates/header.php'); ?>

<head>
    <title>Pocetna</title>    
</head>

<div class="wrapper bgded overlay">
    <section class="hoc container clear">
        <div class="group">
            
            <div class="one_half first">
                <video width="120%" controls>
                    <source src='<?php echo base_url();?>images/A day in Belgrade - Motion Time-lapse.mp4' type="video/mp4">
                    <source src='<?php echo base_url();?>images/A day in Belgrade - Motion Time-lapse.mp4' type="video/ogg">
                </video>
            </div>
            
            <div class="one_half">
                <p><font color="black">Dugu i zanimljivu istoriju Beograda nagoveštava njegova arhitektura – u njegovim starijim četvrtima se uočavaju građevine kako u vizantijskom i otomanskom, tako i u neoklasicističkom i romantičarskom stilu, dok se u Novom Beogradu prevashodno uočavaju detalji u secesionističkom, brutalističkom i neovizantijskom stilu. Bogat i raznovrstan kulturni život grada ogleda se u mnoštvu pozorišta, muzeja, spomenika i opera, dok plaže i reke privlače kupače, ljubitelje sportskih aktivnosti i ljude željne dobre zabave, koji se okupljaju na popularnim splavovima koji su pretvoreni u noćne klubove.</font></p>
            </div>
        </div>
    </section>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 

<!-- JAVASCRIPTS --> 
<script src='<?php echo base_url();?>layout/scripts/jquery.min.js'></script>
<script src='<?php echo base_url();?>layout/scripts/jquery.backtotop.js'></script>
<script src='<?php echo base_url();?>layout/scripts/jquery.mobilemenu.js'></script>

<?php include_once('templates/footer.php'); ?>

</body>
</html>

