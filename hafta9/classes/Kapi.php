<?php
class Kapi {
    public $en=90;
    public $boy=200;
    public $renk="kahverengi";
    public $yon="sağ";

    public function kapiAc() {
        if($this->yon=="sol")
            echo"kapi sola açılır";
        else
            echo "kapi sağa açılır";
    }
}
?>