<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ///SORU 4
    /* Çift boyutlu bir dizinin tüm elemanlarını ekrana 
    sırasıyla yazdırın. For döngüsünü kullanın. 
         0    1     2
    0   Ali  45    56
    1   Ayşe 63    85
    2   Naci 96    74  
    3   Emin 100   100
   */
  $notlar= array(     //0.     1.     2. sütun
                array("Ali",  45,    56), //0. satır
                array("Ayşe", 63,    85), //1. satır
                array("Naci", 96,    74), //2. satır
                array("Emin", 100,   100) //3. satır
            );
            /*
                 i   j   
    echo $notlar[0][0];
    echo $notlar[0][1];
    echo $notlar[0][2];
    echo $notlar[1][0];
    echo $notlar[1][1];
    echo $notlar[1][2];
    echo $notlar[2][0];
    echo $notlar[2][1];
    echo $notlar[2][2];
    echo $notlar[3][0];
    echo $notlar[3][1];
    echo $notlar[3][2];
    */
    for($i=0; $i<4;$i++){
            for($j=0; $j<3;$j++){
                    echo $notlar[$i][$j]."\t";  
                    // 0  0      içerdeki j döngüsü bitmeden dışarı çıkmayacak
                    //0   1  
                    //0   2 
                    //0   3   false içteki döngü bittti
                    //1    0   
                }
                echo "<br>";

    }

 
    
    ?>
</body>
</html>