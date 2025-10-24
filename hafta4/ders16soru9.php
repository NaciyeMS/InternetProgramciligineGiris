<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //SORU 9
   /*Dizideki sorulardan rastgele birini seçip gösteren uygulamayı yazın 
   (örneğin küçük test sayfası).
    
   */
  $sorular = [
    "Türkiye’nin başkenti neresidir?",
    "En büyük gezegen hangisidir?",
    "HTML’in açılımı nedir?",
    "Python hangi tür bir programlama dilidir?",
    "Atatürk’ün doğum yılı nedir?"
];

$index = rand(0, count($sorular) - 1); //0-4

echo "<h2>🎓 Bugünün Sorusu:</h2>";
echo "<p style='font-size:20px; color:darkgreen;'>{$sorular[$index]}</p>";

  
  ?>
</body>
</html>