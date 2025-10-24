<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**Fonksiyona gönderilen x sayısının y nin ci kuvvetini bulan 
     * fonksiyonu tasarlayın ve kullanın 
     */
    function ustAl($x,$y){
        $s=1;
        for($i=0;$i<$y;$i++){
            $s=$s*$x;
        }
        return $s;
    }
    echo ustAl(21,3);
    ?>
</body>
</html>