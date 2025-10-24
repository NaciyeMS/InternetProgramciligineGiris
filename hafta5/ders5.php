<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=5;
    /*normalde scope faaliyet alanı dışına tanımlanmış x değişkeni 
    her scope alanından {} görülür
    FAKAT fonksiyonlarda bu iş geçerli değildir
    bunun için fonksiyonlarda illlaki x i kullanmanız gerekiyorsa
    x i fonksiyon içinde GLOBAL yapmalısınız  */
    function islem($a){
        global $x;
        $sonuc=$x*$a;
        echo $sonuc;
    }

    echo islem(10);
    ?>
</body>
</html>