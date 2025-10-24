<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Not Ortalaması Sonucu</title>
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
</style>
</head>
<body>

<div class="sonuc-kutusu">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vize = (float)$_POST['vize'];
    $final = (float)$_POST['final'];
    $proje = (float)$_POST['proje'];

    // Ortalama hesaplama
    $ortalama = $vize * 0.5 + $final * 0.25 + $proje * 0.25;

    echo "<h2>Not Ortalamanız: " . number_format($ortalama, 2) . "</h2>";
} else {
    echo "<h2>Formdan veri gönderilmedi!</h2>";
}
?>
</div>

</body>
</html>
