<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Tanımlı olan $boy ve $cinsiyet değişkenlerine göre kişinin 
    ideal kilosunu aşağıdaki açıklamaya göre hesaplayıp ekrana
     İdeal Kilonuz=... şeklinde yazdırınız.

Kadınlar için: 
Boyunuzun ilk 150 santimetresi için 45 kilo, 
sonraki her 2.5 cm için 2.2 kilo ekler. 
Örnek olarak; boyunuz 160 cm ise, ideal kilonuz 45+8.8=53.8 kilogram
olacaktır.

Erkekler için: Boyunuzun ilk 150 santimetresi için 48 kilo,
 sonraki her 2.5 cm için 2.7kilo ekler. 
 Örnek olarak boyunuz 180 cm ise, 
ideal kilonuz 48+32.4=80.4 kilogram olacaktır.

Not: Bu fonksiyon boyunu, cinsiyetini bilgileri göndersin
hesaplama işlemini yapsın. gönderilen
boyun en az 150 cm olduğu varsayılır.
.
 */
function hesapla($cinsiyet,$boy){
    $katsayi=0; $baslangicDegeri=0;
    if($cinsiyet=="erkek") {$katsayi=2.7; $baslangicDegeri=48;}
    else if($cinsiyet=="kadin"){ $katsayi=2.2;$baslangicDegeri=45; }
    //katsayi 2.2 
    //başlangıc degeri 45
    $geriKalanBoy=$boy-150; //10
   $n= $geriKalanBoy/2.5; //10/2.5 4
   $idealkilo=$baslangicDegeri+$n*$katsayi;
   return $idealkilo;
        
}
echo hesapla("erkek",180);
    ?>
</body>
</html>