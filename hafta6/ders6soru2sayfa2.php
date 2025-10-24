<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        $ayNumarasi = (int)$_POST["ay"];
        $aylar = [
            1 => "Ocak",
            2 => "Şubat",
            3 => "Mart",
            4 => "Nisan",
            5 => "Mayıs",
            6 => "Haziran",
            7 => "Temmuz",
            8 => "Ağustos",
            9 => "Eylül",
            10 => "Ekim",
            11 => "Kasım",
            12 => "Aralık"
        ];

        if (array_key_exists($ayNumarasi, $aylar)) {
            echo "<h3>Girilen ay: " . $aylar[$ayNumarasi] . "</h3>";
        } else {
            echo "<h3>Geçersiz ay numarası girdiniz!</h3>";
        }
    }
    ?>
    </div>
</body>
</html>