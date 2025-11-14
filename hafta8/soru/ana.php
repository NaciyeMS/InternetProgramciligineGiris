<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Açık mavi arka plan */
            color: #333;
            margin: 0;
            padding: 0;
        }

        div {
            margin-top: 50px;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }

        h1, p {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $link="<div align='center'>
    Hangisinin hesaplamak istersiniz? <br><br>
    <a href='ana.php?id=cember'>ÇEMBER</a> 
    <a href='ana.php?id=kare'>KARE</a> 
    <a href='ana.php?id=dikdörtgen'>DİKDÖRTGEN</a>
    </div>";
    $id = isset($_GET["id"]) ? $_GET["id"] : '';
    switch($id)
    {
        case "cember": 
        { echo $link; include("cember.php"); break;}
        case "kare": 
        { echo $link; include("kare.php"); break;}
        default : 
        { echo $link; include("dikdortgen.php"); break;}
    }
    ?>
</body>
</html>
