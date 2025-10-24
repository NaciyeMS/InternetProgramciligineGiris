<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    BİRİNCİ SAYFA
<br />
İKİNCİ SAYFAYA GİTMEK İÇİN 
<a href="ders2sayfa2.php?ad=<?php echo urlencode("uğur");?>"> Tıklayınız</a>
<?php
/*Türkçe karakteler ve bazı karakterler aktarılırken 
bozulmalar yaşanabilir. Bu bozulmaları engellemek için
 Urlencode ve Urldecode komutlarını kullanırız.*/
?>
</body>
</html>