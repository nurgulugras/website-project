<meta charset="utf-8" />
 <?php  
error_reporting(0); 
require "veri.php"; 

 ?> 
<?php require_once('veri.php'); ?>
<?php
{
 $cat = $_POST['dersler'];


                    $query2 = mysql_query("select * from dersler where id = '$cat' ");
                    while($liste = mysql_fetch_array($query2))
                    {
                        $id = $liste['ders_id'];
                        $ders = $liste['ders_adi'];

                    }
                  


$cati = $_POST['konular'];


                    $query3 = mysql_query("select * from konular where konu_id = '$cati' ");
                    while($list = mysql_fetch_array($query3))
                    {
                        $konu_id = $list['konu_id'];
                        $konu = $list['konu_adi'];

                    }


 ?>
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

    left:1000px;
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
                   </div>
  <div class="row">
  <div style="  position: absolute;

    left:20px;
    top: 20px; "> 

      <div class="col-md-2 logo" ><a href="sinif.php"><img src="mavi.png"/></a> 
      </div>
      </div></div>
  <div class="row1" style="background-color:#33CCCC  ; height: 110px">
              <div class="col-sm-5" style="position: relative; top:15px;"></div>
  
              </div></body>
			  <script type="text/javascript" src="js/jquery.form.min.js"></script>
  <div class="conteiner">
  <div class="row">
   <div style="padding-left: 100px; padding-right: 100px;">
   <div style="padding: 60px;">
      <div class="col-md-11col-md-offset-1">
        <div class="well well-sm">
          <form class="form-horizontal" action="not.php" method="post" widht="600">
          <fieldset>
            <legend class="text-left">Notunuzu Ekleyiniz : </legend>
            <div class="form-group">
              <label class="col-md-2 control-label" for="name">*Kullanıcı Adı:</label>
              <div class="col-md-10">
              
                <input  id="name" name="kul_adi" type="text" value="<?php echo  $_SESSION['user']; ?>" class="form-control" >
              </div>
            </div>
            

            <div class="form-group">
              <label class="col-md-2 control-label" for="kategori">* Dersler:</label>
              <div class="col-md-10">
                  <select name="ders_id" class="browser-default form-control" >
                      <?php


                      $query2 = mysql_query("select * from dersler");
                      while($liste = mysql_fetch_array($query2))
                      {
                          $id = $liste['ders_id'];
                          $ders = $liste['ders_adi'];
                          ?>
                          <option value="<?=$id?>"><?=$ders?></option>
                          <?php
                      }
                      ?>
                      </select>
                      <br>
              </div>
       
              <div class="form-group">
              <label class="col-md-2 control-label" for="kategori">*Konu:</label>
              <div class="col-md-10">

                  <select name="konu_id" class="browser-default form-control">
                      <?php


                      $query3 = mysql_query("select * from konular");
                      while($list = mysql_fetch_array($query3))
                      {
                          $konu_id = $list['konu_id'];
                          $konu = $list['konu_adi'];
                          ?>
                          <option value="<?=$konu_id?>"><?=$konu?></option>
                          <?php
                      }
                      ?>
                      </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label" for="aciklama">* Not:</label>
              <div class="col-md-10">
                <textarea class="form-control" id="aciklama" name="konu" placeholder="" rows="5"></textarea>
              </div>
            
             <div style="  position: absolute;

    left:340px;
    top: 500px; "> 
               
               <div class="form-group" >
                   <button type="submit" name="Kod Test" class="btn btn-primary btn-lg">Ekle</button>

   
	</div>
</div></div>
</fieldset></form></div></div></div></div></div>
<?php


 }

?>


   <?php
 if($_POST){
	 
			 $yazi3=$_POST["kul_adi"]=addslashes($_POST["kul_adi"]);
			 $yazi4=$_POST["ders_id"] =addslashes($_POST["ders_id"]);
			  $yazi5=$_POST["konu_id"]=addslashes($_POST["konu_id"]);
			 $yazi6=$_POST["konu"] =addslashes($_POST["konu"]);
				 $baglanti=mysql_connect("localhost","root","12345678") or die ("Mysql baglantısı basarisiz") ;
				 mysql_select_db("sinif",$baglanti) or die ("Mysql baglantısı basarisiz");				
				 $sorgu=mysql_query("insert into notlar    (kul_adi,ders_id,konu_id,konu) values ('$yazi3','$yazi4','$yazi5','$yazi6')");	
				if($sorgu){
					echo 'Veritabanına Kaydedildi.'; 
					}else{
						echo 'Hata olustu.';	 
					}
						 
 }




if ($_SERVER['REQUEST_METHOD']=='POST') {
  
echo "<meta http-equiv='refresh' content='3;url=sinif.php'>";
 
exit;
}

?>
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
