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
❌ 404 Not Found
 <?php
header("HTTP/1.1 404 Not Found");
echo "<h1>404 - Sayfa Bulunamadı</h1>";
exit;
 ?>
</body>
</html>