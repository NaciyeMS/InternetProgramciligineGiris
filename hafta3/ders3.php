<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Çok boyutlu diziler
    /**Hem Satırları olan hem sütunları olan yapılardır */
    //için dolu olan çok boyutlu dizi tanımlaması 
    $araba=array(
                array("BMW","Siyah",2007),
                array("FİAT","Beyaz",2005),
                array("TOGG","Kırmızı",2025)
    );
   /* echo $araba[0][0]."</br>";//bmw
    echo $araba[0][1]."</br>";//siyah
    echo $araba[0][2]."</br>";//2007
    echo $araba[1][0]."</br>";//fiat
    echo $araba[1][1]."</br>";//beyaz
    echo $araba[1][2]."</br>";//2005
    echo $araba[2][0]."</br>";//Toog
    echo $araba[2][1]."</br>";//kırmızı
    echo $araba[2][2]."</br>";//2025*/

  $araba2=array(
            "a1"=>array("marka"=>"BMW","renk"=>"Siyah","model"=> 2007),
            "a2"=>array("marka"=>"FİAT","renk"=>"Beyaz","model"=> 2005),
            "a3"=>array("marka"=>"TOGG","renk"=>"Kırmızı","model"=> 2025),
    );
     echo $araba2["a3"]["model"]."</br>";//2025
    ?>
</body>
</html>