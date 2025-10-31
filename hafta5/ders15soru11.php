<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Soru 4:
Bir PHP fonksiyonu yazın. Fonksiyon, kendisine gönderilen 
satır ve sütun sayısına göre bir HTML tablosu oluştursun.
Şartlar:
Fonksiyon adı tabloOlustur olacak.
Fonksiyon iki parametre alacak: $satir ve $sutun.
Tablo hücreleri, Satır X - Sütun Y şeklinde numaralandırılacak.
Tabloya CSS ile kenarlık (border) ve biraz padding ekleyin.
Fonksiyonu kullanarak 4 satır ve 3 sütunluk tablo oluşturun.

 */
function tabloOlustur($satir,$sutun){
echo "<style>
table{ 
border-collapse:collapse;
margin:20px;
}
td{
border:1px solid black;
padding: 8px 12px;
text-align:center;
}
</style>";

echo "<table>";
for($i=0;$i<$satir;$i++)
{
    echo "<tr>";
    for($j=0;$j<$sutun;$j++)
    {
        echo "<td>$i. satır $j.sütun</td>";
    }
    echo "</tr>";
}
echo "</table>";
}
    
tabloOlustur(5,4);
    ?>
</body>
</html>