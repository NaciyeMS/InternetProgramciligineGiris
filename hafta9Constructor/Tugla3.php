<?php
class Tugla3 {
    //özellikler
    public $en;
    public $boy;
    public $yukseklik;
    //constructor tanımlama -> VARSYILAN Parametreli Constructor
     public function __construct($en, $boy=null,$yukseklik=null) {
        $this->en=$en;
        $this->boy=$boy;
        $this->yukseklik=$yukseklik;
    }
    // Hacim hesaplayan metot
    public function hacim() {
        return $this->en * $this->boy * $this->yukseklik;
    }
}

?>