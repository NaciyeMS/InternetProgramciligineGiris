<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Site Görüşleri</title>
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
  fieldset {
    border: 2px solid #0077cc;
    border-radius: 8px;
    padding: 15px 20px;
  }
  legend {
    font-weight: bold;
    color: #0077cc;
  }
  .radio-label {
    display: block;
    margin-top: 10px;
    font-weight: normal;
  }
  input[type="radio"] {
    margin-right: 6px;
  }
  input[type="submit"] {
    background-color: #0077cc;
    color: white;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    padding: 8px 15px;
    margin-top: 15px;
  }
  input[type="submit"]:hover {
    background-color: #005fa3;
  }
</style>
</head>
<body>

<div class="form-alani">
  <form id="form1" name="form1" action="ders10sayfa2.php" method="post">
    <fieldset>
      <legend>Üye Kayıt</legend>

      <label class="radio-label">Siteye ait görüşleriniz:</label>
      <label class="radio-label">
        <input type="radio" name="gorus" value="iyi"> İyi
      </label>
      <label class="radio-label">
        <input type="radio" name="gorus" value="orta"> Orta
      </label>
      <label class="radio-label">
        <input type="radio" name="gorus" value="kotu"> Kötü
      </label>

      <input type="submit" name="gonder" value="GÖNDER">
    </fieldset>
  </form>
</div>

</body>
</html>
