<?php
/*📌 Açıklama:
static $buzdolabi → evde 1 tane
$disFirca → her nesneye özel */
class Ev
{
    // Herkes için ORTAK (static)
    public static string $buzdolabi = "Bos";
    // Kişiye ÖZEL (non-static)
    public string $disFirca;
    public static function buzdolabiniGoster()
    {
        echo "Buzdolabinda: " . self::$buzdolabi;
    }
}

//Eve İlk Kişiyi Ekliyoruz
$ali = new Ev();
$ali->disFirca = "Ali'nin dis fircasi";
/*Buzdolabına Bir Şey Koyalım (Static)
Önemli:Buzdolabı Ali’ye değil, eve ait
Nesne ile değil, sınıf adıyla erişilir */
Ev::$buzdolabi = "Sut ve Yumurta";

//Eve İkinci Kişi Giriyor
$ayse = new Ev();
$ayse->disFirca = "Ayse'nin dis fircasi";
//Durumu Kontrol Edelim
echo $ali->disFirca . "<br>";
echo $ayse->disFirca . "<br>";

echo Ev::$buzdolabi;
/*Ali'nin dis fircasi
Ayse'nin dis fircasi
Sut ve Yumurta

Diş fırçaları farklı
Buzdolabı aynı */
//Biri Buzdolabını Değiştirirse Ne Olur?
$ayse::$buzdolabi = "Peynir ve Zeytin";
echo Ev::$buzdolabi; //Peynir ve Zeytin
/*📌 Çünkü:

Static = herkes için ortak */


//static metod kullanımı
Ev::buzdolabiniGoster();


//Static Metotta $this Neden Yok?
/**📌 Çünkü:
 * $this → nesne
 * static → sınıf */
?>
