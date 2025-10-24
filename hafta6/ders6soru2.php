<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Form Soru</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9ff;
    margin: 40px;
  }
  .soru-kutusu {
    background-color: #ffffff;
    border: 2px solid #0077cc;
    border-radius: 10px;
    padding: 20px 30px;
    width: 70%;
    margin: auto;
    box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
  }
  h2 {
    color: #004c99;
    text-align: center;
  }
  p {
    font-size: 16px;
    color: #333;
    line-height: 1.6;
  }
  code {
    background-color: #eef;
    padding: 2px 5px;
    border-radius: 4px;
  }
  .form-alani {
    margin-top: 40px;
    background-color: #fff;
    border: 2px solid #00aaff;
    border-radius: 10px;
    width: 60%;
    padding: 20px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 1px 1px 8px rgba(0,0,0,0.1);
  }
  label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
  }
  input[type="text"], input[type="password"] {
    width: 90%;
    padding: 8px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }
  input[type="submit"] {
    margin-top: 15px;
    background-color: #0077cc;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #005fa3;
  }
</style>
</head>
<body>

<div class="soru-kutusu">
  <h2>💻 Soru: PHP Form İşlemleri</h2>
  <p><strong>Görev:</strong> Bir sayfa oluşturun kullanıcı ay numarasını girsin girilen ayın ismi ekranda yazılsın.

  <p><strong>Sayfa 1 (sayfa1.php):</strong><br>
  1- 12 arası bir sayı girmeli.</p>

  <p><strong>Örnek Kayıt:</strong><br>
  Ay: <code>3</code><br>

  <p><strong>Sayfa 2 (sayfa2.php):</strong><br>
  Mart
  </div>

<!-- Aşağıda örnek form -->
<div class="form-alani">
  <h3>Form Örneği</h3>
  <form method="post" action="ders6soru2sayfa2.php">
    <label>Ay:</label>
    <input type="text" name="ay" required>

    <input type="submit" value="GÖSTER">
  </form>
</div>

</body>
</html>
