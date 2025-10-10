<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**Aşağıdaki toplada ali ve ayşeye ait vize final notları 
     * bulunmaktadır. Dersin ortalaması vizenin %40'ı, 
     * finalin %60 ının toplamı ile hesaplanır. 
     * Dizinin ortalama alanına alive ayşenin ortalamalarını
     *  hesaplatarak ekrana yazdırın. 
     *     vize    final     ort     harfNotu
     * Ayşe  85      80        ?       ? 
     * Ali   65      88        ?        ?
     * */
    $notlar=array(
       "o1"=>array("ad"=>"Ayşe","v"=>85,"f"=>80,"ort"=>0,"harf"=>""),
       "o2"=>array("ad"=>"Ali","v"=>65,"f"=>88,"ort"=>0,"harf"=>""),
       "o3"=>array("ad"=>"Naciye","v"=>90,"f"=>95,"ort"=>0,"harf"=>"")
    );
    $notlar["o1"]["ort"]=$notlar["o1"]["v"]*0.4+$notlar["o1"]["f"]*0.6;
    $notlar["o2"]["ort"]=$notlar["o2"]["v"]*0.4+$notlar["o2"]["f"]*0.6;
    
if($notlar["o1"]["ort"]>=90) $notlar["o1"]["harf"]= "AA";  ///0&1=0
else if($notlar["o1"]["ort"]>=85) $notlar["o1"]["harf"]= "BA"; //0&1=0
else if($notlar["o1"]["ort"]>=75 ) $notlar["o1"]["harf"]= "BB"; //1&1=1
else if($notlar["o1"]["ort"]>=65 ) $notlar["o1"]["harf"]= "CB";
else if($notlar["o1"]["ort"]>=55) $notlar["o1"]["harf"]= "CC";
else if($notlar["o1"]["ort"]>=50) $notlar["o1"]["harf"]= "DC";
else if($notlar["o1"]["ort"]>=0)$notlar["o1"]["harf"]= "FF";

echo  $notlar["o1"]["ad"]."adlı öğrencinin<br>";
echo "Ortalaması:". $notlar["o1"]["ort"]."<br>";
echo "Harf Notu:". $notlar["o1"]["harf"]."<br>";
/* aynı işlemi ayşe ve naciye için yapmak gerekir ama bu doğru kod 
yazımı değildir. Burada bize fonksiyonlar ve diziler kullanarak 
daha efektif ve kısa hale getirebilirsiniz

if($notlar["o1"]["ort"]>=90) $notlar["o1"]["harf"]= "AA";  ///0&1=0
else if($notlar["o1"]["ort"]>=85) $notlar["o1"]["harf"]= "BA"; //0&1=0
else if($notlar["o1"]["ort"]>=75 ) $notlar["o1"]["harf"]= "BB"; //1&1=1
else if($notlar["o1"]["ort"]>=65 ) $notlar["o1"]["harf"]= "CB";
else if($notlar["o1"]["ort"]>=55) $notlar["o1"]["harf"]= "CC";
else if($notlar["o1"]["ort"]>=50) $notlar["o1"]["harf"]= "DC";
else if($notlar["o1"]["ort"]>=0)$notlar["o1"]["harf"]= "FF";

echo  $notlar["o1"]["ad"]."adlı öğrencinin<br>";
echo "Ortalaması:". $notlar["o1"]["ort"]."<br>";
echo "Harf Notu:". $notlar["o1"]["harf"]."<br>";
*/
    
    /*
if($o>=90 & $o<=100) echo "AA";  ///0&1=0
else if($o>=85 & $o<=89) echo "BA"; //0&1=0
else if($o>=75 & $o<=84) echo "BB"; //1&1=1
else if($o>=65 & $o<=74) echo "CB";
else if($o>=55 & $o<=64) echo "CC";
else if($o>=50 & $o<=54) echo "DC";
else if($o>=0 & $o<=49) echo "FF";
 */
    
    ?>
</body>
</html>