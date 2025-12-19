<?php
require_once "Tugla4.php";
$dizi=['en'=>5,'boy'=>6,'yukseklik'=>11];
$t1 = new Tugla4($dizi);
echo "Tuğlanın Eni:". $t1->en."cm<br>";
echo "Tuğlanın Boyu:". $t1->boy."cm<br>";
echo "Tuğla yükselik: " . $t1->yukseklik. " cm³<br>";
echo "Tuğla hacmi: " . $t1->hacim() . " cm³<br>";


?>