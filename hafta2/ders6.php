<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ///STRİNG MANÜPÜLASYONLARI 
    //STRİNG FONKSİYONLAR
    /**strtoupper( değişken)büyük harfe çevirir
strtolower(değişken) küçük harfe çevirir
ucfirst(değişken)cümledeki ilk harfi büyük yapar.
ucwords(değişken)cümledeki kelimelerin hepsinin ilk harfini büyük yapar.
 */
$metin="nmacit@gelisim.edu.tr<br>";
echo strtoupper($metin);
echo strtolower($metin);
echo ucwords($metin);
echo ucfirst($metin);


/*strlen( değişken);
string değişkenin uzunluğunu bulur**/
$metin="nmacit@gelisim.edu.tr<br>";
echo "Değişkenin  uzunluğu". strlen($metin);

/**trim ( değişken);
değişkenin başındaki ve sonundaki boşlukları kırpar */
$metin="   nmacit@gelisim.edu.tr     <br>    ";
echo "<br>Kırpılan değişken:". trim($metin); 

/**rtrim ( değişken);
değişkenin sonundaki boşlukları kırpar */
$metin="nmacit@gelisim.edu.tr   <br>     ";
echo "<br>Sonu Kırpılan değişken:". rtrim($metin); 

/*değişkenin içerisinde bir kelime aranacak
 bu kelimeden sonra gelen karakterler yeni 
 değişkene aktarılacak.
*/
 $metin="nmacit@gelisim.edu.tr";
$yeni=strstr($metin, "@");
echo "Kesilen kısım".$yeni."<br> Tam kısmı".$metin;
 echo "<br>";

 /**değişkenin içerisinde bir kelime bul, bu kelimeyi yeni kelime  ile değiştir.
str_replace("aranacak değer","değiştirilecek değer", değişken ismi);
 */
$metin="nmacit@gelisim.edu.tr";
echo(str_replace("gelisim","gmail",$metin));
 echo "<br>";

 /**değişkeni istenilen miktarda tekrarlanmasını sağlar
 */
$metin="nmacit@gelisim.edu.tr<br>";
 echo str_repeat($metin,5);


 /**string in içinden belli bir kısmı almak.
substr(değişken ismi, başlangıç karakter sayısı, alınacak karakter sayısı);
 */
$metin="nmacit@gelisim.edu.tr<br>";
 echo substr($metin,7,14);
 echo "<br>";

 /**string in içinde aranan karakterin ilkin yerini geri döndürür.
strpos(değişken ismi, "aranacak karakter");
 */
echo "Karakterin yeri ".strpos($metin,"gelisim");


?>


</body>
</html>