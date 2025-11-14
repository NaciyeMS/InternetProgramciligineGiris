<?php
// dhesap.php

if(isset($_POST['gonder'])){
    $a = $_POST['a'];
    $b = $_POST['b'];

    if(is_numeric($a) && is_numeric($b) && $a > 0 && $b > 0){
        $alan = $a * $b;           // Alan = a*b
        $cevre = 2 * ($a + $b);    // Çevre = 2*(a+b)

        echo "<div style='text-align:center; margin-top:50px; font-family: Arial, sans-serif;'>";
        echo "<h2>DİKDÖRTGEN HESAPLARI</h2>";
        echo "<p>Genişlik: <strong>$a</strong></p>";
        echo "<p>Yükseklik: <strong>$b</strong></p>";
        echo "<p>Alan: <strong>".round($alan,2)."</strong></p>";
        echo "<p>Çevre: <strong>".round($cevre,2)."</strong></p>";
        echo "<a href='javascript:history.back()' style='display:inline-block; margin-top:20px; padding:10px 20px; background-color:#ffc107; color:white; border-radius:5px; text-decoration:none;'>Geri Dön</a>";
        echo "</div>";
    } else {
        echo "<div style='text-align:center; margin-top:50px; font-family: Arial, sans-serif; color:red;'>";
        echo "<p>Lütfen geçerli sayılar giriniz!</p>";
        echo "<a href='javascript:history.back()' style='display:inline-block; margin-top:20px; padding:10px 20px; background-color:#ffc107; color:white; border-radius:5px; text-decoration:none;'>Geri Dön</a>";
        echo "</div>";
    }
} else {
    header("Location: dikdortgen.php"); // Forma doğrudan giriş yapıldığında geri yönlendir
    exit();
}
?>
