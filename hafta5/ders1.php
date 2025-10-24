<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
////FONKSİYONLAR
/*Fonksiyonlar nesne tabanlı programlmanın temelidir. 
SLOGANI: BİR KEZ YAP SÜREKLİ KULLAN
Sürekli tekrar eden kodları tekrar tekrar yazmak yerine 
onları bir blok haline getirip ihtiyacımız olduğu yerlerde sadece 
fonksiyonun adı ile çağırırız. 
Bu bize hatalı kod yazımını engellememizi sağlar
Kod düzenleme işlemlerini kolaylaştırır.
Daha efektif kod yazımı sağlar. */
    //PARAMETRE ALAN GERİYE DEĞER DÖNDÜREN FONKSİYON
    function topla1($x,$y){
     $toplam=$x+$y;
     return $toplam;
    }
     //PARAMETRE ALAN GERİYE DEĞER DÖNDÜRMEYEN FONKSİYON
    function topla2($x,$y){
     $toplam=$x+$y;
    echo $toplam; //return olmadığı için geriye değer döndürmedi
    //yapılması gereken iş burada tamamlandı
    //örneğin veri tabanına kayıt yapılacaksa yapıldı bitti 
    }
//PARAMETRE ALMAYAN GERİYE DEĞER DÖNDÜREN FONKSİYON
    function topla3(){
     $toplam=8+9;
     /*veriye herhangi başka bir yerden ulaşıyordur.
     veritabanından formdan vs den ulaşılıyordur veriye  */
     return $toplam;
    }
     //PARAMETRE ALMAYAN GERİYE DEĞER DÖNDÜRMEYEN FONKSİYON
    function topla4(){
     $toplam=8+5;
    echo $toplam; //return olmadığı için geriye değer döndürmedi
    //yapılması gereken iş burada tamamlandı
    //örneğin veri tabanına kayıt yapılacaksa yapıldı bitti 
    }


   echo topla1(5,9);  //geri dönen değer 14 
    topla2(15,91);  //geri dönen değer 106 
    //bu kısımda da parametre alan geriye değer döndürmeyen fonksiyon için
    // sadece çağırma işlemi yaptık. Geri dönen değe rolmadığı için 
    //onu ekrana yazdırmadık ya da bir değişken içerisine atmadık
    echo topla3();
    topla4();
    ?>
</body>
</html>