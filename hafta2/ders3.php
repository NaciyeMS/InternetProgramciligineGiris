<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Program boyunca hiç değişmesini istemediğimiz 
    değişkenleri tanımlarken kullanabiliriz. 
    Mesela Pi sayısı değişmez ve
     program boyunca bu sayıyı kullanabiliriz. 
     Değiştirmeden.
*/
    define("PI",3.14);
    echo PI;
    //UPPER_SNAKE_CASE

    /**Yarı çapı 4 olarak tanımlanmış dairenin alanını ve 
     * çevresini sabit tanımlı pi sayısı ile hesaplayıp ekrana yazalım.
Alan=pi*r*r;
Çevre=2*pi*r;
 */
$r=4;
$alan=PI*$r*$r;
$cevre=2*PI*r;
echo "<strong> Dairenin Alanı=</strong> $alan  <br>";
echo "<strong> Dairenin Çevresi=</strong> $cevre  <br>";

    ?>
</body>
</html>