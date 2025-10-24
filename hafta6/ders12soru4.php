<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Not Ortalaması Hesaplama</title>
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
  label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
  }
  input[type="number"] {
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
  <form action="ders12soru4sayfa2.php" method="post">
    <fieldset>
      <legend>Not Ortalaması Hesaplama</legend>

      <label for="vize">Vize Notu (%50):</label>
      <input type="number" id="vize" name="vize" min="0" max="100" required>

      <label for="final">Final Notu (%25):</label>
      <input type="number" id="final" name="final" min="0" max="100" required>

      <label for="proje">Proje Notu (%25):</label>
      <input type="number" id="proje" name="proje" min="0" max="100" required>

      <input type="submit" value="Hesapla">
    </fieldset>
  </form>
</div>

</body>
</html>
