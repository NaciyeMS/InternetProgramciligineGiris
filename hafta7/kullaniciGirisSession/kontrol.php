<?php
session_start();

// Doğru kullanıcı bilgileri (örnek)
$dogruKullanici = "nms";
$dogruSifre = "123";

// Formdan gelen verileri al
$kullanici = $_POST["kullanici"] ?? "";
$sifre = $_POST["sifre"] ?? "";
/**PHP’deki ?? operatörüne 
 * "null birleşim operatörü (null coalescing operator)" denir.
 * Bir değişken tanımlı değilse veya boşsa (null), yerine varsayılan bir değer koyar.
 * Eğer $_POST["sifre"] varsa ve null değilse, onu $sifre değişkenine ata.
Ama yoksa (örneğin formdan gönderilmediyse), $sifre değişkenine boş string ("") ata.
 */

// Bilgileri kontrol et
if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
    // Oturum başlat
    $_SESSION["kullanici"] = $kullanici;

    echo "<h3>Giriş başarılı!</h3>";
      echo "<p>3 saniye içinde anasayfa ya yönlendirileceksiniz...</p>";
   
    header("Refresh: 3; url=anasayfa.php");
} else {
    echo "<h3 style='color:red;'>Hatalı kullanıcı adı veya şifre!</h3>";
    echo "<p>3 saniye içinde giriş sayfasına yönlendirileceksiniz...</p>";
    echo "<a href='giris.php'>Tekrar dene</a>";

    // 3 saniye sonra otomatik yönlendirme
    header("Refresh: 3; url=giris.php");
}
?>
