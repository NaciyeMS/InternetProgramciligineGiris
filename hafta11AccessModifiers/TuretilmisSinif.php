<?php
class TuretilmisSinif extends AnaSinif
{
    public function erisimiDene()
    {
        echo $this->publicDegisken . "<br>";     // ✅
        echo $this->protectedDegisken . "<br>";  // ✅
        // echo $this->privateDegisken;           // ❌
    }
}

$t = new TuretilmisSinif();
$t->erisimiDene();
?>