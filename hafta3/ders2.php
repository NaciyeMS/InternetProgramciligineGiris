<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//DİZİLER 
//Değişken verileri içerisinde saklayan 
//değiştirilmesi sağlayan
//kullanılması sağlayan
$o0=80;
$o1=75;
$o2=56;
/*60 öğrencinin notunu bu şekilde saklmak mantıklı değil
60 öğrenci için notları derli toplu tutacak bir yapıya ihtiyacım var
bu yapı sıralı  0-1-2-3...
Biz bunlara dizi diyoruz
içerisinde birden fazla veriyi sıralı şekilde tutan yapılar  */
$notlar=array(80,75,56); //içi dolu bir dizi tanımlaması 
echo $notlar[0]."<br>"; //80verisine ulaşılır
echo $notlar[1]."<br>";  //75verisine ulaşılır
echo $notlar[2]."<br>";  //56verisine ulaşılır
$notlar[1]=52;
echo $notlar[1]."<br>";  //52verisine ulaşılır
$gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
echo $gunler[0]."<br>";;

//ÖRNEK
/**Yandaki dizide bazı sayı ve metinsel değerler verilmiştir. 
15 ve 10 sayısı toplanıp  0 yazan hücreye atayın.

"İnternet" ve "Programcılığı" yazılarını birleştirip bos olan 
bir hücreye atayın.
 */
$karisik=array(15,10,"İnternet","Programcılığı",0,"");
//              0  1      2           3         4  5   indisler
$karisik[4]=$karisik[0]+$karisik[1];
$karisik[5]=$karisik[2].$karisik[3];
echo $karisik[4]."<br>";
echo $karisik[5]."<br>";


    ?>
</body>
</html>