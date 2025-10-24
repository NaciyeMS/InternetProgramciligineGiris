<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*FONKSİYONLARDA PARAMETRELERE VARSAYILAN DEĞER ATAMA  */
    function islem ($a=5){
        $sonuc=$a*4;
        echo $sonuc;
    }
    islem();
    islem(10);
    ?>
</body>
</html>