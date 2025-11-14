<?php
session_start();

// Oturum yoksa giriş sayfasına yönlendir
if (!isset($_SESSION["kullanici"])) {
    header("Location: giris.php");
    exit;
}

$kullanici = $_SESSION["kullanici"];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Anasayfa</title>
</head>
<body>
    <h2>Hoş geldiniz, <?php echo $kullanici; ?>!</h2>
    <p><a href="cikis.php">Çıkış yapmak için tıklayınız</a></p>
</body>
</html>
