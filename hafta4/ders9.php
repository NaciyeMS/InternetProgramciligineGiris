<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ////CONTINUE
    /*DALLANMA İFADESİ 
    Döngü yapısının içerisindeki işlemleri atlatarak işleme geçici
     olarak ara vererek bir sonraki adımdan devam etmesini sağlar.
     */
    for ($i=0;$i<10;$i++)
    {
        if($i==5)
        {
        continue;
        }
         echo $i."<br>";
    }

    ?>
</body>
</html>