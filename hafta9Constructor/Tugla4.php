<?php
class Tugla4 {
    //özellikler
    public $en;
    public $boy;
    public $yukseklik;
    //constructor tanımlama -> Parametresiz Constructor
     public function __construct(array $data=[]) {
        $this->en=$data['en'];
        $this->boy=$data['boy'];
        $this->yukseklik=$data['yukseklik'];
    }
    // Hacim hesaplayan metot
    public function hacim() {
        return $this->en * $this->boy * $this->yukseklik;
    }
}

?>