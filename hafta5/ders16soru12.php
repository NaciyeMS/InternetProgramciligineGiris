<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**Menü / Navigasyon Çubuğu Soru: Fonksiyona,
     *  parametre olarak menü elemanlarını alacak
     *  ve CSS ile yatay veya dikey menü oluşturacak. 
 */
function menuOlustur($elemanlar){
    echo "<style> 
        .menu{
            list-style: none;
            padding: 0;
            margin:0;
            display: flex;
            background-color: #333;
        }
        .menu li{
            margin:0;
        }
        .menu li a{
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color:white;
            transition: all 0.3s;
        }
        .menu li a:hover{
            background-color: #555;
            border-bottom: 3px solid yellow;
        }
    </style>";
    echo '<ul class="menu">';
        foreach($elemanlar as $eleman){
            echo '<li><a href="'.$eleman.'.php">'.$eleman.'</a></li>';
        }
    echo '</ul>';
}


menuOlustur(array("Anasayfa","Ürünler","Hakkımızda","İletişim"));
    ?>
    
        
    
</body>
</html>