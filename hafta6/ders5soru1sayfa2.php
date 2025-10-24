<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Sonuç Sayfası</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f8ff;
    text-align: center;
    padding-top: 100px;
  }
  .sonuc-kutusu {
    background-color: #ffffff;
    border: 2px solid #0077cc;
    border-radius: 10px;
    width: 400px;
    margin: auto;
    padding: 30px;
    box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
  }
  .dogru {
    color: #2e7d32;
    font-size: 22px;
  }
  .yanlis {
    color: #c62828;
    font-size: 22px;
  }
</style>
</head>
<body>

<div class="sonuc-kutusu">
<?php
// Formdan gelen veriler alınır
$ad = $_POST["ad"];
$tc = $_POST["tc"];
$sifre = $_POST["sifre"];

// Doğru kayıtlar
$dogru_tc = "12345678963";
$dogru_sifre = "123*-";
$kayitli_ad = "Naciye";

// Kontrol işlemi
if ($tc == $dogru_tc && $sifre == $dogru_sifre) {
    echo "<p class='dogru'>Hoşgeldiniz $kayitli_ad 😉</p>";
} else {
    echo "<p class='yanlis'>Yanlış TC veya Şifre 😞</p>";
}
?>
</div>

</body>
</html>
