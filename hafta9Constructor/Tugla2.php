<?php
class Tugla2 {
    //özellikler
    public $en=10;
    public $boy=7;
    public $yukseklik=5;
    //constructor tanımlama -> Parametresiz Constructor
     public function __construct() {
        echo "tugla oluşturuldu";
    }
    // Hacim hesaplayan metot
    public function hacim() {
        return $this->en * $this->boy * $this->yukseklik;
    }
}

?>