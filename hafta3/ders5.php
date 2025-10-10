<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**DİZİ FONKSİYONLARI  */
    //COUNT
    $dizi=array(34,5,6,66,4,3);
    ///         0  1  2 3  4 5  indis numaraları 0 dan başlar 5. indiste biter
    // dizinin içinde kaç eleman var 6 adet eleman vardır
    echo count($dizi);//dizinin içinde kaç eleman var onu gösteren fonk
    echo "<br>";
    print_r($dizi); //diziyi tasarlanmış bir görsel ile ekrana yazdırır
    //Array ( [0] => 34 [1] => 5 [2] => 6 [3] => 66 [4] => 4 [5] => 3 )
      echo "<br>";
    echo max($dizi); //bir dizin içindeki en büyük elemanı verir
      echo "<br>";
    echo min($dizi); //bir dizin içindeki en küçük elemanı verir
      echo "<br>"; 
     sort($dizi); //küçükten büyüğe doğru sıralar
     print_r($dizi);
     //Array ( [0] => 3 [1] => 4 [2] => 5 [3] => 6 [4] => 34 [5] => 66 )
     echo "<br>"; 
      rsort($dizi); //büyükten küçüpe doğru sıralar
     print_r($dizi);
     //Array ( [0] => 66 [1] => 34 [2] => 6 [3] => 5 [4] => 4 [5] => 3 )
     echo "<br>";
     ///İMPLODE: bir dizi içindeki bütün elamanların arasına eklemek istediğiniz
     //karakteri ekler
    echo implode("-",$dizi);
     echo "<br>";
       ///EXPLODE: bir metin içindeki istediğiniz yerden bölmek için kullanılır
       $mail="nmacit@gelisim.edu.tr";
       $bolunmusMail=explode("@",$mail);
       print_r($bolunmusMail); echo "<br>";
       //Array ( [0] => nmacit [1] => gelisim.edu.tr )
       echo $bolunmusMail[0]; echo "<br>"; //nmacit

       //İN_ARRAY fonksiyonu 
       /*belirlenen bir ifadenin bir dizi içerisinde olup olmadığını 
       bulan fonksiyondur */
       $gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
       echo in_array("Pazartesi",$gunler);echo "<br>";  //1 true 
       echo in_array("Ocak",$gunler); echo "<br>";  //false verisi döndü ekrana yazdırılmaz

       //FALSE TRUE bilgileri hakkında 
       $a=true;
       $b= false ;
       echo $a."<br>"; //1 değeri çıkar
       echo $b."<br>";;//ekrana bir değer çıkmaz 

//İSSET FONKSİYONU 
/*Değişkenin içerisinde veri olup olmadığını gösterir. 
Eğer veri varsa true değeri döner, yoksa false değeri döner.
 */
$cd=null;
echo " null iken  isset fonksiyonu sonucu: ".isset($cd)."<br>";  //false 
$cd1="";
echo " hiç iken  isset fonksiyonu sonucu: ".isset($cd1)."<br>";   //true 
$cd2=" ";
echo " boşluk iken  isset fonksiyonu sonucu: ".isset($cd2)."<br>";   //true
$cd3=" veriveri";
echo " boşluk iken  isset fonksiyonu sonucu: ".isset($cd3)."<br>";   //true


//UNSET fonksiyonu 
/**Değişkeni hafızadan silmek için kullanılır. 
 */
$deger="veri ";
if(isset($deger)){
    echo $deger;
}
else{
    unset($deger);
}
//EMPTY FONKSİYONU 
/*Değişkenin içerisinde veri varsa false, yoksa true değeri döndürür. 

 */
$cd=null;
echo " null iken  empty fonksiyonu sonucu: ".empty($cd)."<br>";  //true 
$cd1="";
echo " hiç iken  empty fonksiyonu sonucu: ".empty($cd1)."<br>";   //true 
$cd2=" ";
echo " boşluk iken  empty fonksiyonu sonucu: ".empty($cd2)."<br>";   //false
$cd3=" veriveri";
echo " boşluk iken  empty fonksiyonu sonucu: ".empty($cd3)."<br>";   //false

///SETTYPE
//Değişkenin veri tiipini değiştirmek için kullanılır.
$tc=2012525252664;
echo gettype($tc)."<br>"; 
settype($tc,"string");
echo ($tc*5)."<br>"; 
echo gettype($tc)."<br>"; 

//İS_ARRAY fonk
//değişkenin dizi olup olmadğı bilgisini döner true yada false
echo is_array($dizi); //true
//İS_BOOL fonk
//değişkenin boolean olup olmadğı bilgisini döner true yada false
echo is_bool($a); //1
//is_float float olup olmadığını 
//is_int int olup olmadığını 
//is_null null olup olmadığını 
//is_numeric sayısal olup olmadığını kontrol eder
//is_string string olup olmadığını kontrrol eder
    ?>
</body>
</html>