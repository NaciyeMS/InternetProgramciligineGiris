<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //SORU 10
    /*Rastgele bir ülke seçecek bir ülkeler dizisinden
    yine o seçtiği ülkenin bayrağını resim olarak gösterecek */

// Bayrak resimleri ve ülke adları aynı sırada dizide tutuluyor
$bayraklar = ["turkiye.png", "afganistan.png", "azerbeycan.png", "filistin.png", 
"gkore.png", "karadag.png","meksika.png","ürdün.png","yemen.png"];
$ulkeler   = ["Türkiye", "Afganistan", "Azerbeycan", "Filistin", "GüneyKore", 
"Karadağ","Meksika","Ürdün","Yemen"];

// Rastgele bir ülke seç
$index = rand(0, count($bayraklar) - 1);

// Ekranda göster
echo "<h2>Rastgele seçilen ülke: {$ulkeler[$index]}</h2>";
echo "<img src='bayraklar/{$bayraklar[$index]}' alt='Bayrak' width='200' style='border:2px solid black'>";

    ?>
</body>
</html>