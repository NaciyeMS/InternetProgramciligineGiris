<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**  Soru2: E-posta (Email) Geçerlilik Kontrolü için bir fonksiyona 
     * şifreyi gönderin şifre ile ilgili bilgilendirme yapsın. 
     * Aşağıda verilen PHP string fonksiyonlarını kullanarak 
     * bir e-posta adresinin geçerli olup olmadığını kontrol 
     * eden bir program yazınız.
     * İstenilenler:
     * Kullanıcıdan alınan e-posta adresinin aşağıdaki 
     * kurallara uyup uymadığını kontrol eden bir PHP programı yazınız:
     * 
     * E-posta en az 6 karakter uzunluğunda olmalıdır.
     * E-posta içinde mutlaka '@' karakteri bulunmalıdır.
     * '@' işaretinden sonra '.' (nokta) karakteri bulunmalıdır.
     * '@' işaretinden önce en az bir karakter olmalıdır.
     * '.' karakterinden sonra en az iki karakter olmalıdır.
     * Örnek Çalışma:
     *      * E-posta: nmacit@gelisim.edu.tr 
     * Çıktı: Geçerli e-posta ✅ 
     * E-posta: nmacitgelisim.edu.tr 
     * Çıktı: Geçersiz e-posta ❌ 
     * '@' karakteri bulunamadı. 
     * E-posta: @gmail.com 
     * Çıktı: Geçersiz e-posta ❌ 
     * '@' öncesinde karakter yok.

 */
function emailKontrol($email){
$hatalar=[];
if(strlen($email)<6) $hatalar[]="Email en az 6 karakter olmalı";
$atPos=strpos($email,"@"); //yoksa bana false //varsa indis //6
if($atPos===false)     {$hatalar[]="Email @ işareti içermeli"; }
else {    if($atPos<1) $hatalar[]="@ öncesinde karakter olmalı";}
$afterAt=substr($email,$atPos+1); //gelisim.edu.tr
$dotPos=strPos($email,"."); //. nınbulunduğu indis numarası var 
if($dotPos===false) {$hatalar[]="@ işaretinden sonra . karakteri bulunmalı";}
else{    $afterDot=substr($email,$dotPos+1);//edu.tr
    if($afterDot<2) {$hatalar[]=". dan sonra en az 2 karakter olmalı";}
}
if(empty($hatalar)){echo "email geçerli";}
else{
    foreach($hatalar as $hata)
    {
        echo $hata;
    }
}


}

$email="nmacitgelisim.";
emailKontrol($email);
    ?>
</body>
</html>