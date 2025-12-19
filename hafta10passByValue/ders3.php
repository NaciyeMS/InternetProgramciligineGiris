<?php 
class Test {
    public $deger = 10;
}
/*🔹 Nesnelerde Durum Farklıdır ⚠️ (Önemli)
PHP’de object’ler referans benzeri davranır. 
📌 Neden?
Nesneler handle (referans) gibi aktarılır
& yazmasan bile değişiklik olur*/
function degistir($nesne) {
    $nesne->deger = 20;
}
$t = new Test();
degistir($t);
echo $t->deger; // 20

?>