<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* Bir aya ait her günün sıcaklık değeri dizi içerisine 
    kaydedilmektedir. For döngüsünü kullanarak her haftaya 
    ait ortalama sıcaklığı ekrana yazdıran programı tasarlayın.
    1.Hafta ortalaması:50;
    2.hafta ortalaması:30;……
    */
    $ay=array(
            array(32,30,31,33,34,35,36), //0
            array(30,29,28,27,26,26,26),  //1
            array(27,27,26,26,25,25,25),
            array(26,26,25,25,24,24,23)  //3
    );
    for($i=0;$i<4;$i++){
        $toplam=0;
        for($j=0;$j<7;$j++){
                $toplam+=$ay[$i][$j];
        }
        echo ($i+1).". haftanın ortlama sıcaklığı: ".($toplam/7)."<br>";
    }
    ?>
</body>
</html>