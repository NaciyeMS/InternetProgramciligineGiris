<?php
require_once "Tugla1.php";
$tugla = new Tugla1(20, 30, 10);
/*➡️ new anahtar kelimesi kullanılır
➡️ __construct() otomatik çağrılır
➡️ Değerler nesneye atanır*/ 
echo "Tuğlanın Eni:". $tugla->en."cm<br>";
echo "Tuğlanın Boyu:". $tugla->boy."cm<br>";
echo "Tuğla hacmi: " . $tugla->hacim() . " cm³<br>";
echo "Tuğla hacmi: " . $tugla->yukseklik. " cm³<br>";
?>