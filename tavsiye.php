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
                    <div class="conteiner">
  <div class="row">
   <div style="padding-left: 100px; padding-right: 100px;">
   <div style="padding: 60px;">
      <div class="col-md-11col-md-offset-1">
        <div class="well well-sm">
          <form class="form-horizontal" action="form.php" method="post" widht="600">
          <fieldset>
            <legend class="text-left"><h2>Önerilen Kitaplar</h2></legend>
            <div class="form-group">
           <div class="row">
           <div class="col-md-3">
              <img src="kitaplar/1.jpg" hspace="30" width="200" height="300"/>
              </div>
              <div class="col-md-9" ><br><br>
             <p> Kitap, iyi kalpli olmasına karşın sıradan bir doktor olan Charles Bovary'nin yüksek idealleri ve aşırı bir lüks tutkusu olan romantik karısı Emma Bovary'nin, yaşamının tekdüzeliğinden sıyrılmak için girdiği durumları ve yaşadığı çeşitli gayrimeşru aşk ilişkilerini konu alır.</p> Yazar Flaubert karakterlerin iç dünyalarını açıklarken realizmin gözlemci yönünü kullanmıştır.<p> Baş karakter Emma Bovary'nin sergilediği davranışlar ve zinaları, o dönemde büyük yankı uyandırmış ve bu yüzden yazar Flaubert uzun yıllar boyu çeşitli eleştiri ve suçlamalara maruz kalmıştır.</p>
              </div></div><br><br>
              <div class="row">
              <div class="col-md-3">
              
                <img  src="kitaplar/2.jpg" hspace="30"  align="left" width="200" height="300" />
              </div>
              <div class="col-md-9" ><br><br>
              <p>Batılı tutum ve davranışı, kılık ve kıyafetiyle mahallede pek sevilmeyen, eğitimli olmasına rağmen saf bir yapıya sahip Şair Müştak Bey, sevdiği Kumru Hanım'la, kılavuz ve yenge hanımlar aracılığıyla evlenmiştir. Nikah sonrasında kendisiyle evlendirilen kişinin, Kumru Hanım'ın çirkin ve yaşlı ablası Sakine Hanım olduğunu görünce önce bayılır sonra itiraz eder.</p> Mahallelinin de işe karışmasıyla başına gelenleri kabul etme mecburiyetinde kalan Müştak Bey'in imdadına arkadaşı Hikmet Bey yetişir. <p>Hikmet Bey'in mahalle imamı Ebulaklaka'ya verdiği rüşvetle olay çözülür, yapılan hile sonuçsuz kalır. Sonunda muradına eren Müştak bey Kumru Hanım'a kavuşur. Ancak Hikmet Efendi birbirleriyle görüşmeden evlenmeye kalkmanın sonucunun kötü olacağını söyler. Müştak Bey'in aklı başına gelir.</p>
               </div></div><br><br>
              <div class="row">
              <div class="col-md-3"> 
               <img  src="kitaplar/3.jpg" hspace="30"  align="left" width="200" height="300"/>
                
              </div>
              <div class="col-md-9" ><br><br>
             <p> Olaylar 1853 yılında Osmanlı Devleti ve Rusya arasında başlayan Kırım Savaşı'nda gönüllü olarak orduya katılan İslam Bey ile onun peşinden Silistre’ye giden Zekiye adlı genç kızın aşkı etrafında gelişir. Silistre Kalesi, 15 Mayıs 1854’te Rus ordusu tarafından kuşatılmıştır. İmparatorluğun her yerinden gelen gönüllüler kaleyi savunmaktadır. </p>Zekiye, erkek giysileri giyip Adem ismi ile gönüllülerin arasına karışır. İslam Bey yaralandığında ona bakar. İslam Bey, yaralı olmasına rağmen yanında Zekiye ile birlikte düşman cephanesini ateşlemeye gider. <p>Kuşatma, haftalar boyu süren yoğun saldırılardan sonra Müslüman askerlerin kahramanca direnişi sayesinde kaldırılır. Döndüklerinde kuşatmanın kaldırıldığını gören Zekiye ile İslam Bey bu mutluluk içinde yapılan düğünle evlenir.</p>
            </div>
          
           
            
          

   
</div></div>
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