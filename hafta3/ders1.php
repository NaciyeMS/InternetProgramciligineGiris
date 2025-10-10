<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    //MANTIKSAL OPERATÖRLER
    /**
     * VE & iki koşşul arasına konulan 
     * ve operatörü matematikteki * Çarpma işlemi gibi davranır.
     * ort=80 
     * ort>20 &ort<50 için  false değer, döndürür
     * 
     * 1.koşul & 2.koşul    sonuc
     * 0            0           0
     * 0            1           0
     * 1            0           0
     * 1            1           1
     * **********************
     * VEY || iki koşul arasına konulan 
     * veya operatörü matematikteki  + toplama işlemi gibi davranır 
     * ort=80 
     * ort>20 || ort<50 için  true değer, döndürür
     * 
     * * 1.koşul || 2.koşul    sonuc
     * 0            0           0
     * 0            1           1
     * 1            0           1
     * 1            1           1
     */
   /*Vize notu=70, final notu 80 olan kişinin ortalamasını 
   harf sistemine göre ekrana yazdıran programı tasarlayın. 
        AA 4.00 90-100
        BA 3.50 85-89
        BB 3.00 75-84
        CB 2.50 65-74
        CC 2.00 55-64
        DC 1.80 50-54
        FF 0.00 00-49
 */
$v=80;
$f=80; //80
$o=$v*0.4+$f*0.6;
if($o>=90 & $o<=100) echo "AA";  ///0&1=0
else if($o>=85 & $o<=89) echo "BA"; //0&1=0
else if($o>=75 & $o<=84) echo "BB"; //1&1=1
else if($o>=65 & $o<=74) echo "CB";
else if($o>=55 & $o<=64) echo "CC";
else if($o>=50 & $o<=54) echo "DC";
else if($o>=0 & $o<=49) echo "FF";
    ?>
</body>
</html>