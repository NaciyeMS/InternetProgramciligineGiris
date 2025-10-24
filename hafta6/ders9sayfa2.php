<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f8ff;
    text-align: center;
    padding-top: 100px;
  }
  .sonuc-kutusu {
    background-color: #ffffff;
    border: 2px solid #0077cc;
    border-radius: 10px;
    width: 400px;
    margin: auto;
    padding: 30px;
    box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
  }
  
</style>
</head>
<body>
     <div class="sonuc-kutusu">
        <?php
        if(isset($_POST['meyveler'])) 
        {
        $meyveler = $_POST['meyveler'];
        echo 'Seçtiğiniz meyveler: <br/>';
        foreach($meyveler as $meyve) {
            echo ' * ' . $meyve . ' <br/>';
        }
        } else {
            echo 'Hiç meyve seçmediniz.';
        }
        


?>

     </div>
</body>
</html>