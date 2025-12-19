<?php
function artirRef(&$sayi) {
    $sayi++;
}
$x = 5;
artirRef($x);
/*📌 Bu sefer:
Fonksiyon gerçek değişkeni değiştirdi
çünkü & işareti adresi=referansı iletti*/
echo $x; // 6
?>