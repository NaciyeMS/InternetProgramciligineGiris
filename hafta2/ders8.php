<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**OPERATÖRLERİN ÖNCELİKLERİ
 
1.  Parantezlerin önceliği vardır
2. ++ ve --
3. * ve / ve %
4. + ve –
10/5*4;

 */
/////////////////////////////////////////////
/**+=      -=        *=        /=     .=
birleşik atama operatörü
$a=$a.$b;                   $a+=$b; */
$a=1;
//$a=$a+4;
$a+=4;
echo $a;
$ad="Naciye";
//$ad=$ad."MACİT SEZİKLİ";
$ad.="MACİT SEZİKLİ";
echo $ad;
echo "<br>";
///////////////////////////////////////
/**ARTIRMA OPERATORÜ */
$b=1;
$c=++$b;
echo "C nin değeri:".$c; //2
echo "<br>";
echo "B nin değeri:".$b;//2
echo "<br>";
/** *AZALTMA OPERATÖRÜ */
$x=5;
$y=--$x;
echo "X nin değeri:".$x; //4
echo "<br>";
echo "Y nin değeri:".$y; //4



    ?>
</body>
</html>