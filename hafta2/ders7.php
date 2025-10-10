<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sayi1=5.454687687;
    $sayi2=7/2; //3.5
    /**float olan değerde virgülden sonra gelen değeri 5 e eşit ve büyükse bir üst tamsayıya yuvarlar.
 */
    echo round($sayi2);
    echo "<br>";
    echo round($sayi1,2);
    echo "<br>";
    /**sayının mutlak değerini alır
     */
    echo abs(-5);
    echo "<br>";
    /**sayının karekökünü alır
    sqrt(sayi);
    */
    echo sqrt(9);
    echo "<br>";
    /**Bölümden kalanı verir. % işareti ile aynı işlevi görür.
fmod(bölünen, bölen);
 */
  echo fmod(7,5);
  echo "<br>";  
  echo 7%5;
  echo "<br>";

  /**Rastgele sayı üretir. 
Boş yazılırsa 0-32768 arası sayı üretir.
rand();
Boş yazılırsa 0-32768 arası sayı üretir.
rand(başlangıç değeri, bitiş değeri);
 */
echo rand();
echo "<br>";
echo rand(1,6);
echo "<br>";
    ?>
</body>
</html>