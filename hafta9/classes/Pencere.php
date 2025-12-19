<?php
class Pencere {
    public $en=200;
    public $boy=100;
    public $tur="ahşap";
    public function saglikliMi() {
      if($this->tur=="ahşap")
        echo "sağlıklı";
    else 
        echo "sağlıksız";
    }
}
?>