<?php

class Ogrenci
{
    // PHP 8+ Constructor Property Promotion
    public function __construct(
        public string $adSoyad,
        public int    $sinif,
        public string $tcNo,
        public string $ders = "Henüz atanmadı",
        public float  $dersNotu = 0.0
    ) { }

    // Ders geçme durumu
    public function notDurumu()
    {
       echo ($this->dersNotu >= 50) ? "Geçti" : "Kaldı";
    }

    // Harf notu hesaplama
    public function harfNotu(): string
    {
        if ($this->dersNotu >= 90) return "AA";
        elseif ($this->dersNotu >= 80) return "BA";
        elseif ($this->dersNotu >= 70) return "BB";
        elseif ($this->dersNotu >= 60) return "CB";
        elseif ($this->dersNotu >= 50) return "CC";
        else return "FF";
    }

    // Bilgileri yazdırma
    public function bilgileriGoster(): void
    {
        echo "Ad Soyad: {$this->adSoyad}<br>";
        echo "Sınıf: {$this->sinif}<br>";
        echo "TC No: {$this->tcNo}<br>";
        echo "Ders: {$this->ders}<br>";
        echo "Ders Notu: {$this->dersNotu}<br>";
        echo "Durum: " . $this->notDurumu() . "<br>";
        echo "Harf Notu: " . $this->harfNotu() . "<br>";
        echo "<hr>";
    }
}
?>