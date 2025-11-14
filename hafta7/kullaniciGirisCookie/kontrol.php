<?php
// Doğru kullanıcı bilgileri
$dogruKullanici = "nms";
$dogruSifre = "123";

// Formdan gelen verileri al
$kullanici = $_POST["kullanici"] ?? "";
$sifre = $_POST["sifre"] ?? "";
$hatirla = isset($_POST["hatirla"]);

// Bilgileri kontrol et
if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
    // "Beni hatırla" seçildiyse cookie oluştur
    if ($hatirla) {
        // 1 saat geçerli cookie
        setcookie("kullanici", $kullanici, time() + 3600, "/");
    }else {
        // "Beni hatırla" seçilmediyse çerez oluşturma ama geçici oturum için yine de gönder
        setcookie("kullanici", $kullanici, 0, "/"); // 0 = tarayıcı kapanana kadar
    }

    echo "<h3>Giriş başarılı!</h3>";
    echo "<p>3 saniye içinde anasayfaya yönlendiriliyorsunuz...</p>";
    header("Refresh: 3; url=anasayfa.php");
    exit;
} else {
    echo "<h3 style='color:red;'>Hatalı kullanıcı adı veya şifre!</h3>";
    echo "<p>3 saniye içinde giriş sayfasına yönlendiriliyorsunuz...</p>";
    header("Refresh: 3; url=giris.php");
    exit;
}
?>
