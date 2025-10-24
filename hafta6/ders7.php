<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Üye Kayıt Formu</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9ff;
    margin: 40px;
  }
  .form-alani {
    background-color: #fff;
    border: 2px solid #00aaff;
    border-radius: 10px;
    width: 50%;
    padding: 20px;
    margin: auto;
    box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
  }
  h2 {
    text-align: center;
    color: #004c99;
  }
  fieldset {
    border: 2px solid #0077cc;
    border-radius: 8px;
    padding: 15px 20px;
  }
  legend {
    font-weight: bold;
    color: #0077cc;
  }
  label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
  }
  select, input[type="text"], input[type="submit"] {
    width: 95%;
    padding: 8px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }
  input[type="submit"] {
    background-color: #0077cc;
    color: white;
    cursor: pointer;
    border: none;
    margin-top: 15px;
  }
  input[type="submit"]:hover {
    background-color: #005fa3;
  }
</style>
</head>
<body>

<div class="form-alani">
  <h2>Üye Kayıt Formu</h2>
  <form id="form1" name="form1" action="ders7sayfa2.php" method="post">
    <fieldset>
      <legend>Üye Kayıt</legend>
      
      <p>
        <label>Ülke Seçiniz:</label>
        <select name="ulke" id="select">
          <option>Türkiye</option>
          <option>Amerika</option>
          <option>Güney Kore</option>
          <option>Almanya</option>
          <option>Japonya</option>
        </select>
      </p>
    

      <p>
        <input type="submit" name="gonder" value="GÖNDER">
      </p>
    </fieldset>
  </form>
</div>

</body>
</html>
