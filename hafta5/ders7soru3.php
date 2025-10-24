<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Gönderilen iki sayıdan büyük olanı ekrana yazdıran yöntemi yazınız.
    parametre olarak hiç bir şey gönderilmediyse de varsayılan 
    değerlerle çalıştırın
 */
function kontrol($x,$y){
    if($x>$y) echo "$x büyüktür";
    else echo "$y büyüktür";
}
kontrol(9,61);

    ?>
</body>
</html>