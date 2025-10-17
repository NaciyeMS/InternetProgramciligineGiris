<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ///FOREACH
    /* Bir dizinin her elmanı için aynı işlemin yapılmasını sağlar.
     Sırasıyla dizi elemana ulaşır.
     foreach($dizi ismi as $degiskenadi)
        {
        echo  $degiskenadi;

        }

        ////foreach döngüsünde dizinin eleman indis numaralarına ulaşmak için 
        //aşağıdaki foreach yapısı kullanılır. 
        foreach($dizi ismi as $indisno => $degiskenadi)
        {
        echo $indisno." ". $degiskenadi;

        }
 */
$dizi=array(2,5,7,3,3,33,55);
foreach($dizi as $eleman){ //for($i=0;$i<count($dizi);$i++)

    echo $eleman."-";
}
echo "<br>";
 foreach($dizi as $indisno => $eleman)
        {
        echo $indisno."indisindeki eleman: ". $eleman."<br>";

        }
    ?>
</body>
</html>