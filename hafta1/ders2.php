<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**Çift tırnak(") içerisinde yazılan metinlerde tekrar(" ) kullanılmaz.
     * Kullanılması gerekirse (‘)tek tırnak kullanılabilir.
 */
echo " Merhaba ‘php’ dünyası " ; //doğru 
echo ' Merhaba "php" dünyası ' ; //doğru 
//echo " Merhaba "php" dünyası " ; //yanlış 
//echo ' Merhaba 'php' dünyası ' ; //yanlış 
    ?>
</body>
</html>