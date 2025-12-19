<?php
/*❓ SORU:

Aşağıda özellikleri verilen Ogrenci adlı bir sınıfı PHP nesne yönelimli
programlama (OOP) kurallarına uygun olarak oluşturunuz.
🔹 Ogrenci Sınıfı
Özellikler (Properties):
adSoyad → string
sinif → int
tcNo → string
ders → string
dersNotu → float
🔹 Constructor
PHP’de constructor overload olmadığı için tek bir constructor tanımlanacaktır.
Constructor, tüm özellikleri parametre olarak almalıdır.
ders ve dersNotu parametreleri varsayılan değerlere sahip olmalıdır:
ders → "Henüz atanmadı"
dersNotu → 0.0
🔹 Metotlar
notDurumu()
Ders notu 50 ve üzerindeyse "Geçti"
Aksi halde "Kaldı" mesajını döndürmelidir.
harfNotu()
Ders notuna göre aşağıdaki harf notunu döndürmelidir:
Not Aralığı	Harf Notu
90 – 100	AA
80 – 89	BA
70 – 79	BB
60 – 69	CB
50 – 59	CC
0 – 49	FF

bilgileriGoster()
Öğrenciye ait tüm bilgileri ekrana yazdırmalıdır.
Çıktı içinde not durumu ve harf notu da yer almalıdır.

🔹 Main (ana.php)
En az iki adet Ogrenci nesnesi oluşturunuz.
Nesnelerden biri için tüm parametreleri, 
diğeri için yalnızca zorunlu parametreleri gönderiniz.
Oluşturulan nesneler için:
bilgileriGoster()
notDurumu()
metotlarını çağırarak sonuçları ekrana yazdırınız. */
require_once("ogrenci.php");
$ogr1 = new Ogrenci(
    adSoyad: "Ahmet Yılmaz",
    sinif: 10,
    tcNo: "12345678901",
    ders: "Matematik",
    dersNotu: 75.5
);

$ogr2 = new Ogrenci(
    adSoyad: "Elif Demir",
    sinif: 9,

    tcNo: "10987654321"
);

$ogr1->bilgileriGoster();
$ogr2->bilgileriGoster();

?>