<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**HTML’de bazı karakterler doğrudan yazılamaz veya özel anlam taşır
     *  (örn: <, >).
Bu karakterler için entity kodları kullanılır: &entity; veya &#kod;.
KARAKTER        KOD         AÇIKLAMA
★              &#9733;     Dolu yıldız
☆              &#9734;     Boş yıldız
©               &copy;      Telif işareti
<               &lt;        Küçüktür işareti
<               &gt;        Büyüktür işareti

Unicode tablosunda arama yapabilirsiniz:
 link:
https://symbl.cc/

SORU: Fonksiyon, parametre olarak bir sayı alacak
 (ör: 1–5) ve CSS ile stil verilmiş yıldız puan sistemi gösterecek.
 Örnek: puanGoster(3) → 3 dolu yıldız, 2 boş yıldız
 */
 function puanGoster($puan){
    echo '<style>
    .yildiz{font-size:30px; color:gray;}
    .dolu {color:gold;}
    </style>
    ';
    for($i=1;$i<=5;$i++){
        if($i<=$puan)echo '<span class="yildiz dolu">&#9733; </span>';
        else echo '<span class="yildiz"> &#9734; </span>';
    }
    
    
 }
 puanGoster(5);
    ?>
</body>
</html>