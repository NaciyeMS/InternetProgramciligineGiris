<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**Fonksiyona gönderilen  sayının faktoriyelini hesaplayan 
     * metotu tanımlayın ve programınızda kullanın.
     * 5!=5*4*3*2*1
    */
    function faktoriyelHesapla($x){
        $f=1;
        for($i=1;$i<=$x;$i++){
            $f=$f*$i;
        }
        return $f;

    }
    echo faktoriyelHesapla(15);
    ?>
</body>
</html>