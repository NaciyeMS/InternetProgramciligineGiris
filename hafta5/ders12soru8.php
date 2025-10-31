<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**  Soru1: Şifre Geçerlilik Kontrolü için bir fonksiyona 
     * şifreyi gönderin şifre ile ilgili bilgilendirme yapsın. 
     * Aşağıda verilen PHP string fonksiyonlarını kullanarak bir
     *  şifre doğrulama programı yazınız.
     *    İstenilenler:
     * Kullanıcıdan alınan şifrenin aşağıdaki kurallara uyup 
     * uymadığını kontrol eden bir PHP programı yazınız:
     * Şifre en az 8 karakter uzunluğunda olmalıdır.
     * Şifre en az bir büyük harf içermelidir.
     * Şifre en az bir küçük harf içermelidir.
     * Şifre en az bir özel karakter (sembol) içermelidir.
     * (Örnek semboller: ! @ # $ % & * ( ) - _ + =)
     * Örnek Çalışma:
     * Şifre: TesT@123 Çıktı: Şifre kurallara uygun ✅ 
     * Şifre: test123 
     * Çıktı: 
     * Şifre en az bir büyük harf içermeli. 
     * Şifre en az bir sembol içermeli.
 */
function sifreKontrol($sifre){
    $hatalar=[];
    if(strlen($sifre<8)) $hatalar[]="şifre en az 8 karakter olmalı";
    if(!preg_match('/[A-Z]/',$sifre)) $hatalar[]="En az 1 büyük harf olmalı";
    if(!preg_match('/[a-z]/',$sifre)) $hatalar[]="En az 1 küçük harf olmalı";
    if(!preg_match('/[! @ # $ % & * ( ) - _ + =]/',$sifre)) $hatalar[]="En az sembol içermeli";
    if(!preg_match('/[1-9]/',$sifre)) $hatalar[]="En az bir rakam içermeli";

    if(empty($hatalar)) echo "şifre kurallara uygun";
    else {
        foreach($hatalar as $hata){
            echo $hata."<br>";
        }
    }
}


$gSifre="es123";
sifreKontrol($gSifre);
    ?>
</body>
</html>