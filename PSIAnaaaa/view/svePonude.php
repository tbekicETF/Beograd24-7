<?php
/**
 * @Tijana Bekic 335/14 i Ana Bozovic 397/14
 */
?>
<?php include_once('templates/header.php'); ?>
<?php include_once('templates/menu.php'); ?>

<head>
    <title>Sve ponude</title>
    
    <!--<script type="text/javascript">
        function ajaxSearch()
        {
            var input_data = $('#search_data').val();
            if (input_data.length === 0) {
                $('#suggestions').hide();
            } else {
                var post_data = 
                {
                    'search_data': input_data,
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                };

                $.ajax({
                    type: "POST",
                    url: "http://localhost/PSIproject/index.php/svePonude/autocomplete",
                    data: post_data,
                    success: function(data) {
                        // return success
                        if (data.length > 0) {
                            $('#suggestions').show();
                            $('#autoSuggestionsList').addClass('auto_list');
                            $('#autoSuggestionsList').html(data);
                        }
                    }
                });

            }
        }
    </script>-->
    
    <script>
    function showHint(str)
    {
        if (str.length==0) { 
            document.getElementById("txtHint").innerHTML="";
            return;
        } else {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET","http://localhost/PSIproject/index.php/svePonude?q="+str,true);
            xmlhttp.send();
        }    
    }
    </script>

    
</head>

<div class="wrapper row3">
    <main class="hoc container clear">
        <ul class="nospace group">
            <li class="two_third first">
                <!--Nadji ponudu: 
                <input type="text" id="search_data" data-label="Nadji ponudu...">
                <div id="suggestions">
                    <div id="suggestionslist">

                    </div>
                </div>-->
                <div class="w3-code-result notranslate">
                <p><b>Nadji ponudu:</b></p>
                    <form action=""> 
                        <input type="text" id="txt1" onkeyup="showHint(this.value)" size="20">
                    </form>
                <p><span id="txtHint"></span></p> 
                </div>
            </li>
        </ul>
    </main>
    
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