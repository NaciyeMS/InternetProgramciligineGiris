<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*İki basamaklı bir sayının okunuşunu ekrana 
    yazdıran programı tasarlayın.
    78 
    birler
    1 bir
    2 iki
    3 üç

145
    onlar 
    1 on
    2 yirmi

    78 %10 =8      81%10   1     93%10  3
    78-8=70        81-1=80      93-3=90
    7              8             9
*/
$sayi=82;
$b=$sayi%10;
$o=($sayi-$b)/10;
switch($o){
    case 1:{echo "on";break;}
    case 2:{echo "yirmi";break;}
    case 3:{echo "otuz";break;}
    case 4:{echo "kırk";break;}
    case 5:{echo "elli";break;}
    case 6:{echo "altmış";break;}
    case 7:{echo "yetmiş";break;}
    case 8:{echo "seksen";break;}
    case 9:{echo "doksan";break;}
    default:{echo "hata";break;}
}
echo " "; 
switch($b){
    case 1:{echo "bir";break;}
    case 2:{echo "iki";break;}
    case 3:{echo "üç";break;}
    case 4:{echo "dört";break;}
    case 5:{echo "beş";break;}
    case 6:{echo "altı";break;}
    case 7:{echo "yedi";break;}
    case 8:{echo "sekiz";break;}
    case 9:{echo "dokuz";break;}
    default:{echo "hata";break;}
}
    ?>
</body>
</html>