<?php 
 
include("veri.php");
ob_start();
session_start();
 
$kadi = $_POST['username'];
$sifre = $_POST['password'];
 
$sql_check = mysql_query("select * from kullanicilar where kul_adi='".$kadi."' and sifre='".$sifre."' ") or die(mysql_error());
 
if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    
    header("Location:sinif.php");
}
else {
 echo '<script type="text/javascript">alert("Kullanıcı adı ve sifre yanlış");</script> <meta http-equiv="refresh" content="0;URL=kayit.php" />';

}
 
ob_end_flush();
?>