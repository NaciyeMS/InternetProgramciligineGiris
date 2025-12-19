<?php
require_once "Tugla5.php";
$t1 = new Tugla5(en:56,boy:5);
echo "Tuğlanın Eni:". $t1->en."cm<br>";
echo "Tuğlanın Boyu:". $t1->boy."cm<br>";
echo "Tuğla yükselik: " . $t1->yukseklik. " cm³<br>";
echo "Tuğla hacmi: " . $t1->hacim() . " cm³<br>";


?>