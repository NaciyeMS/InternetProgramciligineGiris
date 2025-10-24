<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Film Süresi Sonucu</title>
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
/*
Açıklaması:

$_SERVER["REQUEST_METHOD"]
if ($_SERVER["REQUEST_METHOD"] == "POST")
PHP’nin ön tanımlı bir değişkenidir.
O anki HTTP isteğinin türünü verir: "GET" veya "POST" gibi.
== "POST"
Formun method="post" ile gönderilip gönderilmediğini kontrol eder.
Eğer form POST yöntemiyle gönderildiyse true döner, aksi halde false
Ne işe yarıyor?
Form gönderilmeden önce kullanıcı sayfayı açtığında, form alanları boş olur.
Bu kontrol sayesinde sadece form gönderildiyse işlemler yapılır, aksi halde sayfa boş gösterilebilir. */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baslama = $_POST['baslama']; // örn: 14:30
    $bitis = $_POST['bitis'];     // örn: 16:15

    // Saat ve dakikayı ayır
    list($basSaat, $basDakika) = explode(":", $baslama);
    list($bitSaat, $bitDakika) = explode(":", $bitis);

    // Toplam dakikaya çevir
    $basTotal = $basSaat * 60 + $basDakika;
    $bitTotal = $bitSaat * 60 + $bitDakika;

    // Eğer bitiş saati 24:00'ı geçerse veya gece yarısını geçerse
    if ($bitTotal < $basTotal) {
        /*
        Örnek: Başlama 23:30 → 23*60 + 30 = 1410
        Bitiş 01:15 → 1*60 + 15 = 75 
        Yukarıdaki örnekte 75 < 1410 olduğu için doğru, yani film gece yarısını geçip ertesi gün bitmiş.
        24 saat ekleyerek
        Artık bitiş dakikası, başlama dakikasından daha büyük, süre hesaplaması doğru olur:
        Fark = 1515 - 1410 = 105 dakika → 1 saat 45 dakika*/
        $bitTotal += 24 * 60;
    }

    $fark = $bitTotal - $basTotal;
    $saat = floor($fark / 60);
    $dakika = $fark % 60;

    echo "<h2>Film $saat saat $dakika dakika sürdü.</h2>";
} else {
    echo "<h2>Formdan veri gönderilmedi!</h2>";
}
?>
</div>

</body>
</html>
