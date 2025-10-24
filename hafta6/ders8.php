<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Etkinlik Checkbox</title>
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
  .checkbox-label {
    font-weight: normal;
    margin-top: 10px;
  }
  input[type="checkbox"] {
    margin-right: 8px;
    transform: scale(1.1);
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
  <form action="ders8sayfa2.php" method="post">
    <fieldset>
      <legend>Tercihler</legend>

      <p class="checkbox-label">
        <label>
          <input type="checkbox" name="kutu1" value="evet">
          Etkinliklerden haberdar olmak ister misiniz?
        </label>
      </p>

      <p>
        <input type="submit" value="GÖNDER">
      </p>
    </fieldset>
  </form>
</div>

</body>
</html>
