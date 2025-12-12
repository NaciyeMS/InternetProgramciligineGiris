<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();     
//oturum başlatılır. Bu bilgilere ulaşılmak istenen       
$_SESSION["ad"]="naciye";      
//oturum kimliği için «ad» değeri oluşturmak                   
//için atama operatörü ile değer yazılır.
$_SESSION["soyad"]="macit";
///bu oturum bilgilerini kullanmak için 
//$_SESSION["soyad"] bilgilerini yazmak yeterli olur
$adsoyad= $_SESSION["ad"]   . "   ".     $_SESSION["soyad"];
  //her sayfada yazılmalı.
  echo $adsoyad;
?>


</body>
</html>