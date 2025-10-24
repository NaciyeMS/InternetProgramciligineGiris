<?php
function puanGoster($puan) {
    // CSS stilini ekliyoruz
    echo '<style>
        .yildiz {
            font-size: 30px;
            color: gray; /* boş yıldız rengi */
        }
        .dolu {
            color: gold; /* dolu yıldız rengi */
        }
    </style>';

    // Yıldızları yazdırıyoruz
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $puan) {
            echo '<span class="yildiz dolu">&#9733;</span>'; // dolu yıldız
        } else {
            echo '<span class="yildiz">&#9733;</span>'; // boş yıldız
        }
    }
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
    
// Örnek kullanım
puanGoster(3);
    ?>
</body>
</html>