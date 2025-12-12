<?php 
 if (isset($_COOKIE["kullanici"])) {
    // Cookie varsa önce silelim
    setcookie("kullanici", "", time() - 3600, "/");
    echo "Kullanıcı çerezi silindi.";
} else {
    echo "Oturum kapalı.";
}
 //   setcookie("kullanici");
//setcookie("kullanici"," ");
//setcookie("kullanici", "", time() - 3600, "/");
/*Açıklama:

"kullanici" → Silmek istediğin çerezin adı

"" → Değeri boş (önemli değil)

time() - 3600 → 1 saat önceki bir zaman (yani artık süresi dolmuş)

"/" → Tüm dizinlerde geçerli

Bu kod çalışınca tarayıcı, çerezin süresinin dolduğunu görür ve siler ✅ */

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>