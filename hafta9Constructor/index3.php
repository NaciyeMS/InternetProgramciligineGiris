<?php
require_once "Tugla3.php";
$t1 = new Tugla3(10);
echo "Tuğlanın Eni:". $t1->en."cm<br>";
echo "Tuğlanın Boyu:". $t1->boy."cm<br>";
echo "Tuğla yükselik: " . $t1->yukseklik. " cm³<br>";
echo "Tuğla hacmi: " . $t1->hacim() . " cm³<br>";

echo "<hr>ikinci Tuğla bilgileri<br>";
$t2 = new Tugla3(10, 20);
echo "Tuğlanın Eni:". $t2->en."cm<br>";
echo "Tuğlanın Boyu:". $t2->boy."cm<br>";
echo "Tuğla yükseklik: " . $t2->yukseklik. " cm<br>";
echo "Tuğla hacmi: " . $t2->hacim() . " cm³<br>";

echo "<hr>üçüncü Tuğla bilgileri<br>";
$t3 = new Tugla3(10, 20,5);
echo "Tuğlanın Eni:". $t3->en."cm<br>";
echo "Tuğlanın Boyu:". $t3->boy."cm<br>";
echo "Tuğla yükseklik: " . $t3->yukseklik. " cm<br>";
echo "Tuğla hacmi: " . $t3->hacim() . " cm³<br>";

?>