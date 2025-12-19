<?php 
/*
Bu klasörleme yapısını kodun düzenli, okunabilir ve sürdürülebilir
 olması için oluştururuz. 
 Özellikle OOP (Nesne Yönelimli Programlama) yapılan projelerde standarttır.
 ✔ Kod düzenli olur
✔ Okunabilirlik artar
✔ Bakımı kolaylaşır
✔ Tekrar kullanılabilir olur
✔ Profesyonel yazılıma yaklaşırız
Bir classes klasörü oluşturup altına 3 sınıfımızı da ekliyoruz

proje/
│
├─ classes/
│   ├─ Tugla.php
│   ├─ Kapi.php
│   └─ Pencere.php
│
└─ ana.php //index.php // bu sayfada onları kullanıyoruz
*/
//Kullanabilmek için ilk adımımız o sınıfları bu sayfaya dahil etmek 
require_once "classes/Tugla.php"; //classes klasörü altındaki Tugla.php sayfasını getir
require_once "classes/Kapi.php";
require_once "classes/Pencere.php";

$tugla   = new Tugla();
echo "Tuğlanın Eni:". $tugla->en."cm<br>";
echo "Tuğlanın Boyu:". $tugla->boy."cm<br>";
echo "Tuğla hacmi: " . $tugla->hacim() . " cm³<br>";
echo "Tuğla hacmi: " . $tugla->yukseklik. " cm³<br>";
$kapi    = new Kapi();
echo "Kapı Ne Yöne Açılıyor: " . $kapi->kapiAc(). " <br>";
echo "Kapı Rengi: " . $kapi->renk. " <br>";

$pencere = new Pencere();
echo "Pencere Malzemesi Sağlıklı Mı?: " . $pencere->saglikliMi() . " <br>";
echo "Pencere Boy: " . $pencere->boy . " <br>";
?>