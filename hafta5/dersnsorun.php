<?php
function menuOlustur($menuElemanlari) {
    echo '<style>
        /* Menü stilini ayarlıyoruz */
        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex; /* Yatay yapmak için flex kullanıyoruz */
            background-color: #333;
        }
        .menu li {
            margin: 0;
        }
        .menu li a {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color: white;
            transition: all 0.3s;
        }
        .menu li a:hover {
            background-color: #555;
            border-bottom: 3px solid yellow; /* Alt çizgi efekti */
        }
    </style>';

    echo '<ul class="menu">';
    foreach ($menuElemanlari as $eleman) {
        echo '<li><a href="#">' . $eleman . '</a></li>';
    }
    echo '</ul>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Menü elemanlarını dizi olarak tanımlıyoruz
$menuler = ["Ana Sayfa", "Hakkımızda", "Hizmetler", "İletişim"];

// Menü oluşturma fonksiyonunu çağırıyoruz
menuOlustur($menuler);
    ?>
</body>
</html>