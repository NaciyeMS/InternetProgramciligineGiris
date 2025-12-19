<?php
class AnaSinif
{
    public string $publicDegisken = "Kütüphane";
    protected string $protectedDegisken = "Aile Albümü";
    private string $privateDegisken = "Kasa";

    public function sinifIcindenErisim()
    {
        echo $this->publicDegisken . "<br>";    // ✅ ÇALIŞIR
        echo $this->protectedDegisken . "<br>";   // ✅ ÇALIŞIR
        echo $this->privateDegisken . "<br>";   // ✅ ÇALIŞIR
    }
}

$nesne = new AnaSinif();
$nesne->sinifIcindenErisim();
?>