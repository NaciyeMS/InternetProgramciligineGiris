<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*SORU 6
rakamlar dizinindeki 1.jpg, 2.jpg ,3.jpg ,4.jpg ,5.jpg ,6.jpg ,7.jpg 
,8.jpg ,9.jpg ve 0.jpg
resimlerin adlarını bir dizi olarak tanımlayınız. 
0 ile 9 arasında ürettiğiniz rastgele
sayıya karşılık gelen resmi ekranda gösteriniz.
(Üretilen sayı 6 olursa ekran 6.jpg resmi görünecek)
Html kodu ile rakamlar klasörünün altındaki bir 
resmi ekranda göstermek için aşağıdaki kod kullanılır.
<img src="rakamlar/1.jpg">
    */
$rakamlar=array("0.png","1.png","2.png","3.png","4.png","5.png","6.png","7.png","8.png","9.png");
///             0       1           2       3       4       5       6       7       8       9
$i=rand(0,9);
echo "<img src='rakamlar/$rakamlar[$i]'>";
    ?>
</body>
</html>