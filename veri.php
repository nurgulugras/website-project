<?php

## MySQL Bağlantı Bilgilerimiz ##
$mysql_host     =     "localhost";     // mysql sunucunuz. genelde localhost'tur.
$mysql_user     =     "root";            // mysql kullanıcı adınızı temsil eder. localhost'ta çalışıyorsanız root'tur.
$mysql_pass     =     "12345678";        // mysql kullanıcı adınıza ait şifreyi temsil eder. localhost'ta çalışıyorsanız boşdur.
$mysql_db       =     "sinif";        // mysql veritabanı ismini temsil eder.

## MySQL'e Bağlanalım ##
$baglan = mysql_connect($mysql_host, $mysql_user, $mysql_pass)or die(mysql_error()); // sırasıyla sunucu,kullanıcı adı ve şifredir. şifre yoksa sonuncunun yazılmasına gerek yoktur.

// eğer bağlanma işlemi başarılıysa dedik...
if($baglan)
{
    // veritabanımızı seçelimki üzerinde işlem yapabilelim değil mi :)
     $vt_sec = mysql_select_db($mysql_db, $baglan); // sırasıyla mysql veritabanı ismimiz ve mysql bağlantı işlemimizin olduğu değişken.
    if(!$vt_sec)
    {
        // eğer veritabanı da seçilmezse hata verelim.
        // bu kısımdaki ünlem olumsuzluk belirtir. yani seçilememişse dedik.
        die("Veritabanı Seçilemedi!"); // die() fonksiyonu kendinden sonraki işlemleri durdurur. yani site bağlanana kadar kapalı kalır diyebiliriz :)
    }
}else
{
    //  bağlanmazsa verelim hatayı 
    die("MySQL'e Bağlanılamadı!");
}

# 
mysql_query("SET NAMES UTF8");

