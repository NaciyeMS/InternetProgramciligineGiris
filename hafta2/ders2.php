<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Vize notu 80, final notu 70 olan bir 
    öğrencinin not ortalaması için vize notunun %40 ı
    , final notunun %60 ı alınmaktadır. 
    Ortalamayı hesaplayıp ekrana yazdırın.
*/
$vize=80;
$final=70;
$ort=$vize*40/100+$final*60/100;
echo "Ortalaması: ".$ort;
    ?>
</body>
</html>