<?php
// Cookie silme işlemi
setcookie("kullanici", "", time() - 3600, "/"); // geçmişe tarih yazarak siler
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Çıkış</title>
</head>
<body>
  <h3>Çıkış yapıldı, çerez silindi.</h3>
  <a href="giris.php">Giriş sayfasına dön</a>
</body>
</html>
