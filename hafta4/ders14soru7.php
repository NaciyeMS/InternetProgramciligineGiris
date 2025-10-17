<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //SORU7
    /* 
    Tanımlı olan metni font etiketinin size parametresini kullanarak
     bir döngü yardımıyla aşağıdaki gibi gösteriniz. 
(Bilindiği üzere size parametresi 1 ile 7 arasında bir değer
alır) 
Font komutu kullanımı: <font size=7>naciye macit</font><br>
naciye macit 7
naciye macit 6
naciye macit 5
naciye macit 4
. . .

 */
$metin="Naciye MACİT SEZİKLİ";
for($i=7;$i>0;$i--){
    echo "<font size=$i>$metin</font><br>";
}
    ?>
</body>
</html>