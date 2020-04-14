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
              

             
          <div class="row"> 
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
<?php 
 
include("veri.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"]))
    header("Location:kayit.php");


?>
<input type="submit" onClick="parent.location='logout.php'" value="ÇIKIŞ" class="btn btn-success pull-center">
</div>
                   </div></div>




                 <div style="height: 50px;"></div>
                   <div class="container" style="padding-bottom: 120px;">
                     <div class="row" style="height: 100px;">
                       <div class="test-square-top col-sm-4 ">
                           <a href="matematik.php"> <img class="büyük"  src="icon/kare.png"  hspace="30" align="left" /></a><h4>Matematik</h4>Trigonometri,İntegral...</div>
                          
  <div class="test-square-top col-sm-4 ">
      <a href="turkce.php"> <img class="büyük" src="icon/türkce.png" hspace="30"  align="left"/></a><h4>Türkçe</h4>Zarflar,Fiiller... </div>
  <div class="test-square-top col-sm-4 ">
      <a href="fizik.php"> <img class="büyük" src="icon/fizik.png" hspace="30"  align="left"/></a><h4>Fizik</h4>Basınç,Vektörler...</div>
  </div>
  <div class="row" style="height: 100px;">
  <div class="test-square-top col-sm-4">
      <a href="tarih.php"><img class="büyük" src="icon/tarih.png" hspace="30"  align="left"/></a><h4>Tarih</h4>
      İslam Tarihi,I.Dünya Savaşı...</div>
  <div class="test-square-top col-sm-4">
      <a href="kimya.php"><img class="büyük" src="icon/kimya.png" hspace="30"  align="left"/></a><h4>Kimya</h4>Elektro Kimya,Çözeltiler...</div>
  <div class="test-square-top col-sm-4">
      <a href="biyoloji.php"><img class="büyük" src="icon/biyoloji.png" hspace="30"  align="left"/></a><h4>Biyoloji</h4>Hücre,Solunum...</div>
  </div>
  <div class="row" style="height: 100px;">
  <div class="test-square-top col-sm-4">
      <a href="felsefe.php"><img class="büyük" src="icon/felsefe.png"  hspace="30"  align="left"/></a><h4>Felsefe</h4>Bilim Felsefesi, Kişilik ve Zeka...</div>
  <div class="test-square-top col-sm-4">
      <a href="ingilizce.php"><img class="büyük" src="icon/ingilizce.png" hspace="30"  align="left"/></a><h4>İngilizce</h4>The Simple Present Tense...</div>
  <div class="test-square-top col-sm-4">
      <a href="din.php"><img class="büyük" src="icon/cami.png" hspace="30"  align="left"/></a><h4>Din Kültürü ve Ahlak Bilgisi</h4>Türklerde İslam,Varlıklar Alemi...</div>
  </div>
  <div class="row" style="height: 100px;">
   <div class="test-square-top col-sm-4">
      <a href="geometri.php"><img class="büyük" src="icon/geometry.png" hspace="30"  align="left"/></a><h4>Geometri</h4>Üçgende Açı,Özel Üçgenler...</div>
  <div class="test-square-top col-sm-4">
      <a href="tavsiye.php"><img class="büyük" src="icon/kitap.png" hspace="30"  align="left"/></a><h4>Kitap Tavsiyeleri</h4>Roman,Hikaye...</div>
  <div class="test-square-top col-sm-4">
      <a href="calisma.php"><img class="büyük" src="icon/ögrenci.png" hspace="30"  align="left"/></a><h4>Etkili Ders Çalışma Yöntemleri</h4>Hızlı Okuma,Yazarak Çalışma... </div>
  </div></div>
<div class="container">
       <div class="row" style="height: 150px;">
        <div class="test-square-top col-sm-6 "><img src="icon/klasör.png"hspace="30"  align="left"/></div>
        <div style="  position: absolute;
    left: 120px;
    top: 600px;  ">
            <h3>
        <?php
        $bilgi=mysql_query("SELECT COUNT(ders_id) FROM dersler ");
        if($bilgi)
        {
            $tek=mysql_fetch_array($bilgi);
            echo $tek[0];
            echo "<br>";
            echo ("Dersler");
        }

        ?>
            </h3>
        </div>
      <div class="test-square-top col-sm-6 "><img src="icon/not.png" hspace="780"  align="right"/></div>
    <div style="  position: absolute;
    left: 400px;
    top: 600px;  ">
            <h3>
                <?php
                $bilgi=mysql_query("SELECT COUNT(not_id) FROM notlar");
                if($bilgi)
                {
                    $tek=mysql_fetch_array($bilgi);
                    echo $tek[0];
                    echo "<br>";
                    echo ("Notlar");
                }

                ?>
            </h3>
        </div>
</div>
      </div>

   
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

  </div>

</body>
</html>


	