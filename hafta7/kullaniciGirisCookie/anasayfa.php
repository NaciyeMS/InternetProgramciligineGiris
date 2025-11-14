
<?php
// Cookie kontrolü
if (!isset($_COOKIE["kullanici"])) {
    header("Location: giris.php");
    exit;
}

$kullanici = htmlspecialchars($_COOKIE["kullanici"]);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Anasayfa</title>
</head>
<body>
  <h2>Hoş geldiniz, <?php echo $kullanici; ?>!</h2>
  <p><a href="cikis.php">Çıkış yapmak için tıklayın</a></p>
</body>
</html>
