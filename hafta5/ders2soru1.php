<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Üç değişken içerisinde yer alan metinleri bir cümle haline 
    getiren kodları tasarlayın. fonksiyon ile bu işlemi yapın.
    */
    function birlestir($x,$y,$z){
      return $x." ".$y." ".$z;
    }
    $x="Naciye";
    $y="Macit";
    $z="Sezikli";
   echo birlestir($x,$y,$z);
   echo birlestir("Muhammed","Emin","Sezikli");
    ?>
</body>
</html>