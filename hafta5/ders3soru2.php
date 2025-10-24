<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Kendisine gönderilen yapılacak işleme (+, -, *, /) 
    göre yine kendisine gönderilen iki sayı ve +, -, *, / 
    işlemlerine tabi tutan bir fonksiyon oluşturun. 
 */
function hesapla($islem,$x,$y){
    $s=0;
    if($islem=="+") $s=$x+$y;
    else if($islem=="-") $s=$x-$y;
    else if($islem=="*") $s=$x*$y;
    else if($islem=="/") $s=$x/$y;
    else if($islem=="%") $s=$x%$y;
    return $s;
}

echo hesapla("-",9,3)."<br>";
echo hesapla("%",9,3)."<br>";
echo hesapla("*",9,3)."<br>";
echo hesapla("+",9,3)."<br>";
echo hesapla("/",9,3)."<br>";


    ?>
</body>
</html>