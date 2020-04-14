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
            <legend class="text-left"><h2>Etkili Ders Çalışma Yöntemleri</h2></legend>
            <div class="form-group">
           <div class="row">
           <div class="col-md-3">
              <img src="kitaplar/a.jpg" hspace="30" width="200" height="300"/>
              </div>
              <div class="col-md-9" >
             <b><h4> ÇALIŞMA ORTAMINA İLİŞKİN DÜZENLEMELER </h4></b>
              <p>* Çalışma odası mümkün olduğunca fazla sıcak ve ya soğuk olmamalıdır. </p>
<p>* Çalışma odası düzenli olarak havalandırılmalı ve sessiz olmalıdır. </p>
<p>* Çalışma masası ve yüksekliği çalışan kişinin boyuna uygun olmalıdır. </p>
<p>* Ders çalışırken müzik televizyon vs dinlenmemelidir. </p>
<p>* Ders çalışma ortamında, dikkatin dağılmasına yol açacak resim, afiş gibi malzemeler olmamalıdır.</p>
<p>* Çalışma masası ders faaliyetinin dışında kullanılmamalıdır. </p>
<p>* Çalışmaya başlamadan önce, çalışma sırasında gerekli olacak bütün malzemenin el altında bulunması, dikkatin dağılmaması açısından önemlidir. 
</p>
              </div></div><br><br>
              <div class="row">
              <div class="col-md-3">
              
                <img  src="kitaplar/b.jpg" hspace="30"  align="left" width="200" height="300" />
              </div>
              <div class="col-md-9" >
              <b><h4>ZİHNİN DAĞILMASINI ÖNLEME </h4></b>
<p>* Zihnin dağılması herkesin karşılaştığı bir durumdur. Buna yol açan sebepler içten ve dıştan gelir. </p>
<p>* Zihnin dağılmasına yol açan iç sebepler; hayal kurmak ve endişe etmektir. </p>
<p>*Hayal kurmaya başladığınızı fark ederseniz ya hayal kurmayı kendinize ödül olarak vererek, 
bunu dinlenme aralığınıza erteleyin yada hayalinizi kurmaya devam edin ve tamamlayınca da dersinize dönün. </p>
<p>* Hayalinizi bir türlü bitiremiyorsanız kalkıp dolaşın veya hafif fizik egzersizi yapın. </p>
<p>* Zihnin dağılmasına yol açan dışsal sebepler; odada asılı posterler,yatarak ders çalışmak, 
müzik dinlemek, televizyon izlemek, bir şeyler atıştırmak ve gezinmektir. </p>

               </div></div><br><br>
              <div class="row">
              <div class="col-md-3"> 
               <img  src="kitaplar/c.jpg" hspace="30"  align="left" width="200" height="300"/>
                
              </div>
              <div class="col-md-9" ><br><br>
           <b><h4> AMAÇLARIN VE ÖNCELİKLERİN BELİRLENMESİ </h4></b>
<p>* Zamanı kontrol etmek hayatı kontrol etmektir. </p>
<p>* Başarılı olabilmek için enerjinizi, günlük olayların peşinde harcayarak geçirmek değil,amaçlarınız doğrultusunda kullanmak önemlidir. </p>
<p>* Zamanı öncelikleriniz doğrultusunda kullanabilmek için uzun,orta ve kısa dönemli amaçlarınızın belirlenmesi gerekir.<br>
(Örnek; kısa dönemli amaç;okul derslerinde başarılı olmak, orta dönemli amaç;lise diploması almak,uzun dönemli amaç;üniversiteye girmek.) </p>
<p>* Listenin en üstünde yer alan hayat amacınızı büyük harflerle bir kartona yazıp,çalışma masanıza asın. Bu daha iyi motive olmanızı sağlayacaktır. </p>
<p>* Bir çok amacı bir arada gerçekleştirmek kolay değildir. Bu nedenle seçim yapıp en önemli ve kendinizi en güçlü hissettiğiniz amaca yönlendirin. </p>
<p>* Amacınızı gerçekleştirmek için her gün belli bir süre ayırın ve bu süreye kesinlikle uyun. </p>

            </div>
          
           
            <div class="row">
              <div class="col-md-3"> 
               <img  src="kitaplar/d.jpg" hspace="30"  align="left" width="200" height="300"/>
                
              </div>
              <div class="col-md-9" ><br><br>
           <b><h4>ZAMANI DÜZENLEMEK VE PROGRAM YAPMAK  </h4></b>
<p>* Zamanın etkili bir şekilde kullanılması günlük programın düzenlenmesiyle mümkündür.</p>
<p>* Zamanı iyi kullanmak için geçmişte zamanın nasıl ziyan edildiğinin bilinmesi gerekmektedir. </p>
<p>* En iyi ders çalışma yöntemi; çalışmak, tekrarlamak ve dinlemektir. </p>
<p>* Zaman tasarrufu için televizyon uzak durun ve programlarda seçici olun. </p>
<p>* Boş geçen her süreyi tekrar yaparak geçirin.</p>

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

  </div></body>
                   
                   </html>