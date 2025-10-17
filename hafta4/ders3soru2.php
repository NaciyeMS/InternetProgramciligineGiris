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
    İçerisinde günlerin yazılı olduğu bir dizi oluşturun. 
    Bu dizinin tüm elemanlarını ekrana while döngüsü ile yazdırın.
    * */
    $dizi=array(12,65,87,96,52,63);
    ///         0  1  2  3  4  5
    //count($dizi)  -->6 bilgisini gönderir
    $i=0;
    while($i<count($dizi)){
        echo $dizi[$i]."-";
        $i++;
    }

    ?>
</body>
</html>