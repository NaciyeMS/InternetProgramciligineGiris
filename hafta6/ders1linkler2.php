<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    burasın 2. sayfadır. 
<?php
/**diğer sayfadan link ile gönderilen id ve ad bilgilerine
 * aşağıdaki şekilde ulaşırız. 
 */
$gid=$_GET["id"];
$gad=$_GET["ad"];
echo "<br>gelen id=".$gid;
echo "<br> gelen ad=".$gad;
?>
</body>
</html>