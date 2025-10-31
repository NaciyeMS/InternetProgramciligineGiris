<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //FONKSİYONLARA DİZİ GÖNDERMEK 
    /* Fonksiyona hem dizi gönderilebilir hem de geriye 
    döndürülen değer bir dizi olabilir. */
    function diziIslem($gelenDizi) {
        $toplam=0;
        $carpim=1;
        foreach($gelenDizi as $deger){
            $toplam+=$deger;
            $carpim*=$deger;
        }
        return array($toplam,$carpim);
    }
    $sonuc=diziIslem(array(5,6,3));
   
    echo "Toplam=".$sonuc[0];
    echo "Çarpim=".$sonuc[1];
    ?>
</body>
</html>