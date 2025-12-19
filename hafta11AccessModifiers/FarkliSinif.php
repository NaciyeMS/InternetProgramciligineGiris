<?php
class FarkliSinif
{
    public function erisimiDene()
    {
        $nesne = new AnaSinif();

        echo $nesne->publicDegisken . "<br>";      // ✅ ÇALIŞIR

        // echo $nesne->protectedDegisken;          // ❌ HATA
        // echo $nesne->privateDegisken;            // ❌ HATA
    }
}

$f = new FarkliSinif();
$f->erisimiDene();
?>