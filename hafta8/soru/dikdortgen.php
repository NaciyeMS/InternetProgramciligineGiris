<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dikdörtgen Hesaplama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        fieldset {
            border: 2px solid #ffc107;
            border-radius: 10px;
            padding: 20px;
        }

        legend {
            font-weight: bold;
            color: #ffc107;
            padding: 0 10px;
        }

        label {
            display: block;
            margin-bottom: 15px;
            font-size: 16px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #ffc107;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>
    <?php
$alan = $cevre = $hata = "";
$r = "";

if(isset($_POST["gonder"])){

    $a = $_POST["a"];
    $b = $_POST["b"];

    if(is_numeric($a) && is_numeric($b) && $a > 0 && $b > 0){
        $alan = $a * $b;           // Alan = a*b
        $cevre = 2 * ($a + $b);    // Çevre = 2*(a+b)
    } else {
        $hata = "Lütfen geçerli sayılar giriniz!";
    }
}
?>
    <form action="" method="post">
        <fieldset>
            <legend>DİKDÖRTGEN</legend>
            <p>
                <label>Genişlik Giriniz
                    <input type="text" name="a" value="" />
                </label>
            </p>
            <p>
                <label>Yükseklik Giriniz
                    <input type="text" name="b" value="" />
                </label>
            </p>
            <p>
                <label>
                    <input type="submit" name="gonder" value="HESAPLA" />
                </label>
            </p>
        </fieldset>
    </form>

    <?php if($hata): ?>
    <p style="text-align:center; color:red;"><?php echo $hata; ?></p>
<?php endif; ?>

<?php if($alan): ?>
    <div style="text-align:center; margin-top:20px;">
        <h2>Sonuçlar</h2>
        <p>Alan: <b><?php echo round($alan, 2); ?></b></p>
        <p>Çevre: <b><?php echo round($cevre, 2); ?></b></p>
    </div>
<?php endif; ?>
</body>
</html>
