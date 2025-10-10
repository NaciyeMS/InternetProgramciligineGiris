<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*iki değişkenin verinin karşılaştırılmasını sağlarlar
    geriye ya true ya da false döner
==    Eşit mi?
!=     Eşit değil mi?
>      Büyük mü?
<      Küçük mü?
>=    Büyük veya Eşit mi?
<=    Küçük veya Eşit mi?
*/
///////////////////////////////////
//İF YAPISI
/**iki verinin karşılaştırılmasına bir durum ya da koşul deriz
 * bir koşul doğru ise yapılacaklar
 * if yapısı ile çalıştırırız. 
 */
$a=19;
if($a>9)
{
    echo "çift basamaklı sayı";
}
//İF ELSE yapısı
/*** bir koşul doğru ise yapılacaklar
 * yanlış ise yapılacaklar yapısı if yapısı ile çalıştırırız.  */
$a=19;
if($a>9)
{
    echo "çift basamaklı sayı";
}
else 
{
    echo "tek basamaklı sayı";
}
// ELSE İF yapısı
/*** bir KOŞUL(1) doğru ise yapılacaklar
 * yanlış ise yeni bir KOŞUL(2) doğrı ise yapılacaklar 
 * yanlış ise yeni.....
 * şeklinde devam eden yapıya else if yapısı denir */
$a=-5;
if($a>0)  //KOŞUL (1)
{
    echo "pozitif sayı";
}
else if($a<0)//KOŞUL (2)
{
    echo "negatif sayı";
}
else //KOŞUL (1) ve KOŞUL (2) yanlışsa yapılacaklar.
    {
    echo "sıfır";
}

////////////////////////////////////////
//ÖRNEK 
/**ay değişkeni içindeki veriye göre 
 * ayı ekrana yazdıran programı tasarlayın */
$ay=1; //ay 1 ocak 2 şubat
if($ay==1) echo "ocak";
else if($ay==2) echo "şubat";
else if($ay==3) echo "mart";
else if($ay==4) echo "nisan";
else if($ay==5) echo "mayıs";
else if($ay==6) echo "haziran";
else if($ay==7) echo "temmuz";
else if($ay==8) echo "agustos";
else if($ay==9) echo "eylül";
else if($ay==10) echo "ekim";
else if($ay==11) echo "kasım";
else if($ay==12) echo "aralık";
else echo "hata";
////////////////////////////////////////////////////
//SWİTCH CASE YAPISI 
/** Switch case yapısı 
 * ->tek bir değişkene ait
 * -> eşitlik durumlarının kontrol edildiği 
 * durumlarda kullanılır. else if ile de çalıştırılabilir
 * switch case ile de çalıştırılabilir. 
 * 
 * yukarıdaki örnekte tek bir $ay değişkenine ait
 * 1 olma,2 olma... 12 olma durumları var
 * bu yapının aynısını switch case ile de aşağıdaki şekilde
 * yazabiliriz. 
*/
$ay = 8; // İstediğin ay numarasını buradan değiştir

switch($ay){
    case 1: echo "Ocak"; break;
    case 2: echo "Şubat"; break;
    case 3: echo "Mart"; break;
    case 4: echo "Nisan"; break;
    case 5: echo "Mayıs"; break;
    case 6: echo "Haziran"; break;
    case 7: echo "Temmuz"; break;
    case 8: echo "Ağustos"; break;
    case 9: echo "Eylül"; break;
    case 10: echo "Ekim"; break;
    case 11: echo "Kasım"; break;
    case 12: echo "Aralık"; break;
    default: echo "Hata: Geçersiz ay numarası!"; break;
}
    ?>
</body>
</html>