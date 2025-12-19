<?php
class Tugla5 {
     //constructor tanımlama ->PHP 8+ Named Arguments Constructor
     //?int $en kodunda en değişkeni int olabilir null olabilir demek 
     //? yoksa kesinlikle int olacak demek
     //Constructor çağrılırken $boy için mutlaka bir değer verilmelidir.
     //yoksa hata verir
     /*Çünkü:
int → null OLAMAZ
Varsayılan değer yok (= ... yok)
Yani PHP diyor ki:s
“Ben bu değişkeni başlatmak zorundayım, ama sen bana değer vermedi */
     public function __construct(
        public ?int $en=null,
        public int $boy,
        public ?int $yukseklik=null
        ) {   }
    // Hacim hesaplayan metot
    public function hacim() {
        return $this->en * $this->boy * $this->yukseklik;
    }
}

?>