<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    //FONKSİYONLARA DEĞER OLARAK REFERANS GÖNDERME 
    //ADRES GÖNDERME
    /**Normalda fonksiyona gönderilen parametreler değerleridir. 
     * ama bazen değer yerine parametrenin adresini gönderip 
     * içerisindeki değere müdahale edebilmek isteriz.
     */
    function degistir($sayi){
        $sayi=55;
    }
    function referanstakiniDegistir(& $sayi){
        $sayi=4;
    }
    $sayi=1;
    degistir($sayi); //değeri gönderiyoruz yani $sayi değişmeyecek
    echo $sayi."<br>"; 
    referanstakiniDegistir($sayi);
    echo $sayi."<br>"; 
    ?>
</body>
</html>