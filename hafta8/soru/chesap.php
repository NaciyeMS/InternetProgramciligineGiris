<?php
// chesap.php

if(isset($_POST['gonder'])){
    $r = $_POST['r'];

    if(is_numeric($r) && $r > 0){
        $alan = pi() * $r * $r;        // Alan = πr²
        $cevre = 2 * pi() * $r;        // Çevre = 2πr

        echo "<div style='text-align:center; margin-top:50px; font-family: Arial, sans-serif;'>";
        echo "<h2>ÇEMBER HESAPLARI</h2>";
        echo "<p>Yarıçap: <strong>$r</strong></p>";
        echo "<p>Alan: <strong>".round($alan,2)."</strong></p>";
        echo "<p>Çevre: <strong>".round($cevre,2)."</strong></p>";
        echo "<a href='javascript:history.back()' style='display:inline-block; margin-top:20px; padding:10px 20px; background-color:#007BFF; color:white; border-radius:5px; text-decoration:none;'>Geri Dön</a>";
        echo "</div>";
    } else {
        echo "<div style='text-align:center; margin-top:50px; font-family: Arial, sans-serif; color:red;'>";
        echo "<p>Lütfen geçerli bir sayı giriniz!</p>";
        echo "<a href='javascript:history.back()' style='display:inline-block; margin-top:20px; padding:10px 20px; background-color:#007BFF; color:white; border-radius:5px; text-decoration:none;'>Geri Dön</a>";
        echo "</div>";
    }
} else {
    header("Location: ana.php?id=cember"); // Forma doğrudan giriş yapıldığında geri yönlendir
    exit();
}
?>
