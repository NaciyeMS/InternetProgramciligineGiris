<?php
// Basit kullanıcı bilgileri
$dogruKullanici = "admin";
$dogruSifre = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullanici = $_POST["kullanici"];
    $sifre = $_POST["sifre"];

    // 1️⃣ Boş alan kontrolü
    if (empty($kullanici) || empty($sifre)) {
        header("HTTP/1.1 400 Bad Request"); // istemci hatası
        echo "<h3>❗ Lütfen tüm alanları doldurun.</h3>";
        exit;
    }

    // 2️⃣ Bilgiler doğruysa
    if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
        header("HTTP/1.1 200 OK"); // başarılı istek
        echo "<h3>✅ Giriş başarılı! Hoş geldin, $kullanici.</h3>";
        exit;
    }

    // 3️⃣ Bilgiler yanlışsa
    else {
        header("HTTP/1.1 401 Unauthorized"); // yetkisiz erişim
        echo "<h3>🚫 Kullanıcı adı veya şifre hatalı!</h3>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
body {
  font-family: Arial, sans-serif;
  background: #f3f3f3;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
form {
  background: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
input {
  display: block;
  width: 200px;
  margin: 10px 0;
  padding: 8px;
}
button {
  background: #2196F3;
  color: white;
  border: none;
  padding: 8px 12px;
  border-radius: 4px;
}
</style>
</head>
<body>

<form method="POST">
  <h2>Kullanıcı Girişi</h2>
  <input type="text" name="kullanici" placeholder="Kullanıcı Adı">
  <input type="password" name="sifre" placeholder="Şifre">
  <button type="submit">Giriş Yap</button>
</form>

</body>
</html>
