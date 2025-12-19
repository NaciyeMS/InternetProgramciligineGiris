<?php
//Sınıf Tanımı 

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


//Sınıftan Nesne Oluşturma
$d1= new Tugla(); //bu kod ile tugla sınıfından bir nesne oluşturuldu
//artık Bu nesnenin kendine ait bütün özelliklerine ulaşabiliriz. 
echo "<br>Tulanın Eni:".$d1->en;
echo "<br>Tulanın Boyu:".$d1->boy;
echo "<br>Tulanın Yükseklik:".$d1->yukseklik;
//işlevlerine de yine oluşturduğumuz nesne üzerinden ulaşabilriz.
echo "<br>Tulanın Hacmi:".$d1->hacim();


//yeni bir nesne tanımlayabiliriz
$d2=new Tugla();
echo "<br>Tulanın Eni:".$d2->en;
echo "<br>Tulanın Boyu:".$d2->boy;
echo "<br>Tulanın Yükseklik:".$d2->yukseklik;
//işlevlerine de yine oluşturduğumuz nesne üzerinden ulaşabilriz.
echo "<br>Tulanın Hacmi:".$d2->hacim();
 

$d1->en=22; //nesnenin seçtiğimiz değerlerini değiştirebiliriz. 
//bu değişiklik diğer nesneleri etkilemeyecektir
echo "<br>1. Tulanın Eni:".$d1->en;
echo "<br>2. Tulanın Eni:".$d2->en;
?>