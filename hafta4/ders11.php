<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* Bir dizi tanımladığınızda, bilgisayar dizinin yerini göstermek
     için bir işaretciye sahiptir. Bu değer her zaman dizinin 
     ilk değerini gösterir.
    */
$sayi=array(1,5,9,46,7,2);
///         0 1  2 3  4 5 indisler
echo "dizinin geçerli elemanı ". current($sayi)."<br>";

next($sayi);     //işaretciyi bir artırır.
echo "dizinin geçerli elemanı ". current($sayi)."<br>";
//dizinin geçerli elemanı artık ikinci indisdeki değerdir.

reset($sayi);     //işaretciyi sıfırlar
echo "dizinin geçerli elemanı ". current($sayi)."<br>";
//işaretci sıfırlandığı için ilk eleman gösterilecektir.

    ?>
</body>
</html>