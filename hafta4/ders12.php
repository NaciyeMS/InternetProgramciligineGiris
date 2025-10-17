<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sayi=array(1,5,9,46,7,2);
    //          0  1 2 3 4 5 6
    while($a=current($sayi))
    {
    echo $a . "-" ;
    next($sayi);
    }

    ?>
</body>
</html>