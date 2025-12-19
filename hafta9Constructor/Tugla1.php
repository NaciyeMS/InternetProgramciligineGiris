<?php
class Tugla1 {
    //özellikler
    public $en=10;
    public $boy=7;
    public $yukseklik=5;
    //constructor tanımlama -> Parametreli Constructor
     public function __construct($en, $boy, $yukseklik) {
        $this->en = $en;
        $this->boy = $boy;
        $this->yukseklik = $yukseklik;
    }
    // Hacim hesaplayan metot
    public function hacim() {
        return $this->en * $this->boy * $this->yukseklik;
    }
}

?>