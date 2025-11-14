<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**Ders12.php de oluşturulan cookie e bu cookie silinmedikçe her sayfadan 
     * ulaşabilirim. */ 
   // $gelen= $_COOKIE["kullanici"];
   // echo $gelen;
   if (isset($_COOKIE["kullanici"])) {
    echo "Hoş geldin, " . $_COOKIE["kullanici"];
} else {
    echo "Kullanıcı çerezi bulunamadı.";
}
    ?>
</body>
</html>