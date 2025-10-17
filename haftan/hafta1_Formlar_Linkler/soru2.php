<?php
if(empty($_POST["gorus"]))
{
    echo "herhangi bir seçenek seçmedi";
}
else if(isset($_POST["gorus"]))
{
    $g=$_POST["gorus"];
    echo $g." seçildi";
}
?>