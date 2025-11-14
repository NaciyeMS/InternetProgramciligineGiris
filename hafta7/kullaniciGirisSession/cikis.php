<?php
session_start();
session_unset();   // Tüm session değişkenlerini temizle
session_destroy(); // Oturumu sonlandır
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Çıkış</title>
</head>
<body>
    <h3>Oturum kapatıldı.</h3>
    <a href="giris.php">Giriş sayfasına dön</a>
</body>
</html>
