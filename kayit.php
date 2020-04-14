<meta charset="utf-8" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"/>
<?php
include 'veri.php';


 if($_POST){

     $kuladi        =    $_POST["username"];
     $tamadi       =    $_POST["name"];
     $sifre       =    $_POST["password"];
     $mail      =    $_POST["email"];
     
     

     

     $ekle        =    mysql_query("insert into kullanicilar values ('','$kuladi','$tamadi','$sifre','$mail')");
     if($ekle){
         echo "Başarılı Bir Şekilde Eklendi !";
         echo "<meta http-equiv='refresh' content='2;url=kayit.php'>";
     }else{
         echo "Bir Sorun Oluştu";
         echo "<meta http-equiv='refresh' content='2;url=kayit.php'>";

     }
 }
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

      <div class="col-md-2 logo" ><a href="kayit.php"><img src="mavi.png"/></a> </div>
      </div></div>
	<div class="row1" style="background-color:#33CCCC  ; height: 110px">
              <div class="col-sm-5" style="position: relative; top:15px;">
                  <?php print ("$output"); ?>
                   </div></div>
                       <div style="  position: absolute;

    left:800px;
    top: 30px; "> 

        <form action="login.php" method="POST" class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input required="" type="text" class="form-control" name="username" placeholder="Kullanıcı Adınız">
                    </div>
                    <div class="form-group">
                        <input required="" type="password" class="form-control" name="password" placeholder="Şifre">
                    </div>
                    <button type="submit" class="btn btn-default">Giriş</button>
                </form>
                </div>
                <div style="  position: absolute;

                 left:200px;
                 top: 150px; "> 
                 <div style="float:left;"><img src="a.png" width="500" height="500"  /></div>
                 </div>
                 <div style="  position: absolute;

    left:900px;
    top: 150px; "> 

                <form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">ÜYE OL</legend>
    </div>
    <div class="control-group">
      <label class="control-label"  for="username">Kullanıcı Adı:</label>
      <div class="controls">
        <input required="" type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Kullanıcı adı, boşluk olmadan herhangi bir harf veya sayı içerebilir</p>
      </div>
    </div>
      <div class="control-group">
      <label class="control-label" for="email">Tam Adınız:</label>
      <div class="controls">
        <input required="" type="text" id="name" name="name" placeholder="" class="input-xlarge">
        <p class="help-block">Tam Adınızı Yazınız</p>
      </div>
    </div>
 
    <div class="control-group">
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input required="" type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Lütfen Geçerli Bir E-mail yazınız</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Şifre</label>
      <div class="controls">
        <input required="" type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Şifre en az 4 karakter olmalıdır</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Şifre (Tekrar)</label>
      <div class="controls">
        <input required="" type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block">Şifreyi tekrarlayın</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">ÜYE OL</button>
      </div>
    </div>
  </fieldset>
</form>
            
          </div>
        </div>
      </div>
    </div>
         
    </div>

</body></html>