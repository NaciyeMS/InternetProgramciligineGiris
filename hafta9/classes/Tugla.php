<?php
class Tugla {
    //özellikler
    public $en=10;
    public $boy=7;
    public $yukseklik=5;
    // Hacim hesaplayan metot
    public function hacim() {
        return $this->en * $this->boy * $this->yukseklik;
    }
}

?>