<?php
$gad=$_POST["ad"];
$gsifre=$_POST["sifre"];
if($gad=="nms"&$gsifre=="123")
{
    echo "hoşgeldiniz ".$gad."<br>";
    $gulke=$_POST["ulke"];
    echo "ülkeniz ". $gulke."<br>";
    if(isset($_POST["etkinlik"]))
    {echo "etkinlikler mailinize gelecek<br>";}
    else{echo "etkinlikler gönderilmeyecek<br>";}
    if(isset($_POST["meyveler"]))
    {
        echo "seçtiğiniz meyveler<br>";
        $meyveler=$_POST['meyveler'];
        foreach($meyveler as $meyve)
        {
        echo "-".$meyve."<br>";
        }
    }
    else{

    echo "hiç meyve seçmediniz";
    }
}
else{

    echo "hatalı kullanıcı adı veya sifre";
}


?>