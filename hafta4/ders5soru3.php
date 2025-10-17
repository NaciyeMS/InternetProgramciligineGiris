<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ///SORU 3
    /* İçerisinde günlerin yazılı olduğu bir dizi oluşturun. 
    Bu dizinin tüm elemanlarını ekrana FOR döngüsü ile yazdırın.
   */
  $gunler=array("Pazartesi","salı","çarşamba","perşembe","cuma","cumartesi","pazar");
  for($i=0;$i<count($gunler);$i++){
    echo $gunler[$i]."<br>";
  }
    
    ?>
</body>
</html>