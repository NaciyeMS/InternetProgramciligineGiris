<?php
require_once "Tugla2.php";
$tugla = new Tugla2();
/*➡️ new anahtar kelimesi kullanılır
  ➡️ __construct() otomatik çağrılır
  ➡️ Değer olarak başlangıçta sınıfta belirnen değerler ne ise onlar nesneye atanır*/ 
echo "Tuğlanın Eni:". $tugla->en."cm<br>";
echo "Tuğlanın Boyu:". $tugla->boy."cm<br>";
echo "Tuğla hacmi: " . $tugla->hacim() . " cm³<br>";
echo "Tuğla hacmi: " . $tugla->yukseklik. " cm³<br>";
?>