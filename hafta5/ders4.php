<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Bazen fonksiyonlar içerisinde diziler ile işlem yapılabilir
    bu dizi return kelimesi ile geri çağrıldığı yere gönderilebilir
     */
    function islem($x,$y){
        $snc[0]=$x+$y;
        $snc[1]=$x-$y;
        return  $snc;
    }

    $d=islem(6,2);
    /**çağrıldığı yerde artık onu karşılayan da bir dizidir
     * burada d değişkeni artık bir dizidir ve indisleri üzerinden 
     * istediğiniz değere ulaşabilrisiniz.
     */
    echo $d[1];
    ?>
</body>
</html>