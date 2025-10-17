<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//SORU 8
/* Bu sefer bir diziyle renk isimlerini tutuyoruz, 
rastgele birini seçip arka planı o renkle değiştiriyoruz:*/
$renkler=array("red","blue","green","yellow","orange","purple","pink","cyan","gray","lime");
$i=rand(0,count($renkler)-1);
$secilenRenk=$renkler[$i];
echo "<h2>Rastgele Seçilen Renk: $secilenRenk <h2>";
echo "
<div style='width:200px; height:200px; background-color:$secilenRenk; border:2px solid black;'>

</div>
";

/////bütün renkler gözüksün 
echo "<h2>Tüm Renkler <h2>";
foreach($renkler as $r){
echo "
<div style='display:inline-block; width:40px; height:40px; background-color:$r; margin:3px'>

</div>
";

}


?>
</body>
</html>