<?php

function artir($sayi) {
    $sayi++;
}

$x = 5;
artir($x);
/*
📌 
$x değişmedi, çünkü:

$sayi, $x’in kopyasıdır
 */
echo $x; // 5
?>