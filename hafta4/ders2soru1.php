<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* SORU
    0 dan 50 ye kadar olan sayıları aralarına – koyarak yazdırın.
    0-1-2-3-4-…..
   */
     $i=0; //başlangıç
    while($i<50) //döngüye devam edebilmesi için true gelmeli BİTİŞ
    {
        echo $i."-"; //tekrar eden iş 
        $i++;  //sabit bir artış 
    }
    ?>
</body>
</html>