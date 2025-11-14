<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Kullanıcı Girişi (Cookie)</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }
    h2 { text-align: center; color: #333; }
    label { display: block; margin-bottom: 5px; color: #555; font-size: 14px; }
    input[type="text"], input[type="password"] {
      width: 100%; padding: 10px; margin-bottom: 15px;
      border: 1px solid #ccc; border-radius: 5px;
    }
    button {
      width: 100%; background-color: #4CAF50;
      color: white; padding: 10px; border: none;
      border-radius: 5px; cursor: pointer;
    }
    button:hover { background-color: #45a049; }
    .note { text-align: center; font-size: 13px; color: #666; }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Giriş Yap</h2>
    <form action="kontrol.php" method="post">
      <label for="kullanici">Kullanıcı Adı:</label>
      <input type="text" id="kullanici" name="kullanici" required>

      <label for="sifre">Şifre:</label>
      <input type="password" id="sifre" name="sifre" required>

      <label>
        <input type="checkbox" name="hatirla"> Beni hatırla
      </label>

      <button type="submit">Giriş Yap</button>
    </form>
  </div>
</body>
</html>
