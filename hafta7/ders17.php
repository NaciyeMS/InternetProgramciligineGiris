<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
// Başka bir sayfada oturum bilgilerini kullanmak istersek

session_start();  
// komutunu mutlaka yazmalıyız. İçindeki verileri zaten otomatik 
//olarak kendi taşır.
///bu oturum bilgilerini kullanmak 
//için $_SESSION["soyad"] bilgilerini yazmak yeterli olur
echo $adsoyad= $_SESSION["ad"]   . "   ".     $_SESSION["soyad"];
    ?>
</body>
</html>