<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ///COOKIE
    /**İstemci tarafında oluşturulan dosyalardır. 
     Login işlemlerinde beni hatırla işlemleridir. 
     setcookie() fonksiyonu kullanılır.
     setcookie(Çerezadı,çerezinalacağı değer, 
     çerezin sistemde tutacağı zaman) ;

    setcookie("cookie" , $degisken, time()+3600);

    Time() // komutu anlık zamanı belirtir.
    Time()+3600 // ekleyerek 3600sn eklenmiş olur. Sistemde 1 saat tutulması sağlanır. 
    */
    setcookie("kullanici","Naciye",time()+3600);
    echo "çerez oluşturuldu";
    /**
     * CHROME İÇİN COOKIE LERE BAKMA
     * İlgili siteyi Chrome’da aç.
     * Geliştirici Araçları’nı aç: F12 veya Ctrl+Shift+I (Mac: Cmd+Option+I).
     * Üst sekmelerden Application (Türkçe Chrome’da Uygulama) sekmesine geç.
     * Sol menüden Storage → Cookies veya direkt Cookies altında sitenin domain’ini seç.
     * Ortada tüm çerezler tablo halinde gelir: Name, Value, Domain, Path,
    *Expires/Max-Age, Size, HTTP, Secure, SameSite gibi sütunları görebilirsin.
    *Sağ tık ile bir çerezi Copy → Copy value yaparak değeri kopyalayabilirsin.
    *Sütun başlıklarına tıklayıp sıralama/filter yapabilirsin.
    *Not: DevTools’tan görülen HttpOnly çerezler de listelenir 
    *— ancak HttpOnly işaretli çerezlerin değeri JavaScript aracılığıyla
    * okunamaz (güvenlik nedeniyle). 
    */

     ?>
</body>
</html>