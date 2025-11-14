<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
PHP zaten sayfayı başarıyla döndürürken bunu otomatik gönderir.
 Manuel olarak da verebilirsin:
 🔁 301 / 302 Yönlendirme kalıcı yönlendirme:
 <?php
header("Location: https://example.com");
header("HTTP/1.1 301 Moved Permanently");
exit;
 ?>
</body>
</html>