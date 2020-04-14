<meta charset="utf-8" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"/>
<?php
include 'veri.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>E-SINIF</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/sinif.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

</head>
  <body>

  <div class="row">
  <div style="  position: absolute;

    left:20px;
    top: 20px; "> 

      <div class="col-md-2 logo" ><a href="sinif.php"><img src="mavi.png"/></a> 
      </div>
      </div></div>
	<div class="row1" style="background-color:#33CCCC  ; height: 110px">
              <div class="col-sm-5" style="position: relative; top:15px;"></div>

 <div style="  position: absolute;

    left:350px;
    top: 38px; "> 
               <ul class="nav nav-tabs" style="background-color:#3399FF">
      
           <li <?php if($_GET['dosya'] == 'suggest') {?> class="active" <?php } ?>> <input type="submit" onClick="parent.location='not.php'" value="NOT EKLE" class="btn btn-success pull-center">
           </li></ul></div>
 <div style="  position: absolute;

    left:450px;
    top: 38px; "> 
             <input type="submit" onClick="parent.location='video.php'" value="DERS VİDEOLARI" class="btn btn-success pull-center">
</div>
                  <?php print ("$output"); ?>
                   </div><div class="row"> 
          <div style="  position: absolute;

    left:1100px;
    top: 40px; "> 
                             <?php
@session_start();
if ($_SESSION['user'])
{
echo "  Hoşgeldiniz " .$_SESSION['user']. "";

}else
?> &nbsp
<input type="submit" onClick="parent.location='logout.php'" value="ÇIKIŞ" class="btn btn-success pull-center">
</div>
                   </div></div>
                        <div style="  position: absolute;

    left:145px;
    top: 100px; "> 
       <h1> İngilizce</h1>
 <div class="form-group">
              </div>
            </div>
            </div>
            <br><br><br>
                             <div class="conteiner">
  <div class="row">
   <div style="padding-left: 100px; padding-right: 100px;">
   <div style="padding: 60px;">
      <div class="col-md-11col-md-offset-1">
        <div class="well well-sm">
          <form class="form-horizontal"  method="post" widht="600">
          <fieldset>
<legend class="text-left"><h4>Present Continuous Tense</h4></legend>
  
                           <?php


                      $query3 = mysql_query("select n.kul_adi, n.konu from konular as k
                        inner join notlar as n on n.konu_id=k.konu_id where n.konu_id='15'");
                       while($list = mysql_fetch_array($query3))
                      {
                          $kul = $list['kul_adi']; 
                          $konu = $list['konu'];
                          
                          ?>
                          <p><b><?=$kul?> : &nbsp  </b>  &nbsp  &nbsp <?=$konu?></p>
                          <?php
                      }
                      ?>
                      </fieldset></div></form>
        <div class="well well-sm">
          <form class="form-horizontal"  method="post" widht="600">
                      <fieldset>
                      <legend class="text-left"><h4>Simple Present Tense</h4></legend>
            
                            
                           <?php


                      $query3 = mysql_query("select n.kul_adi, n.konu from konular as k
                        inner join notlar as n on n.konu_id=k.konu_id where n.konu_id='16'");
                       while($list = mysql_fetch_array($query3))
                      {
                          $kul = $list['kul_adi']; 
                          $konu = $list['konu'];
                          
                          ?>
                          <p><b><?=$kul?> : &nbsp  </b>  &nbsp  &nbsp <?=$konu?></p>
                          <?php
                      }
                      ?>
</fieldset></form></div></div></div></div></div></div>
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<div id="footerContainer">

    <hr>
        <div class="text-center center-block" style=" background-color:#CCCCCC">
           <b><h4> <p class="txt-railway">- E-SINIF 2017 -</p></h4></b>
            <br />
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
              <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>
    <hr>
</div>

  </div></body></html>