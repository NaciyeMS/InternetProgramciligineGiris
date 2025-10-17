<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //BREAK
    /* For-Foreach-While-Do While-Switch yapılarında kullanılır.
     Döngü yapısının içerisindeki diğer işlemlerin tümü atlatarak
      döngünün dışındaki ilk adımdan devam eder.
    */
    for ($i=0;$i<10;$i++)
    {
        if($i==5)
        {
        break;
        }
        echo $i."<br>";
    }

    ?>
</body>
</html>