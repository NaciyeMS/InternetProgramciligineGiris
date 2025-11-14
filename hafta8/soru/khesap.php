<?php
// khesap.php

if(isset($_POST['gonder'])){
    $a = $_POST['a'];

    if(is_numeric($a) && $a > 0){
        $alan = $a * $a;           // Alan = a²
        $cevre = 4 * $a;           // Çevre = 4a

        echo "<div style='text-align:center; margin-top:50px; font-family: Arial, sans-serif;'>";
        echo "<h2>KARE HESAPLARI</h2>";
        echo "<p>Kenar Uzunluğu: <strong>$a</strong></p>";
        echo "<p>Alan: <strong>".round($alan,2)."</strong></p>";
        echo "<p>Çevre: <strong>".round($cevre,2)."</strong></p>";
        echo "<a href='javascript:history.back()' style='display:inline-block; margin-top:20px; padding:10px 20px; background-color:#28a745; color:white; border-radius:5px; text-decoration:none;'>Geri Dön</a>";
        echo "</div>";
    } else {
        echo "<div style='text-align:center; margin-top:50px; font-family: Arial, sans-serif; color:red;'>";
        echo "<p>Lütfen geçerli bir sayı giriniz!</p>";
        echo "<a href='javascript:history.back()' style='display:inline-block; margin-top:20px; padding:10px 20px; background-color:#28a745; color:white; border-radius:5px; text-decoration:none;'>Geri Dön</a>";
        echo "</div>";
    }
} else {
    header("Location: kare.php"); // Forma doğrudan giriş yapıldığında geri yönlendir
    exit();
}
?>
