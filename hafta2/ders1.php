<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Dikdörtgene ait kenarlardan biri 4 cm biri 9 cm dir. 
    Bu dikdörtgenin alanını ve çevresini ekrana yazdırın.
    */
    $x=4;
    $y=9;
    $cevre=($x+$y)*2;//2*$x+2*$y //2*($x+$y)
    $alan=$x*$y;
    echo "Alan:".$alan."<br>"."Çevre:".$cevre;
    ?>
</body>
</html>