<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**Kaç km yol yaptığı, gaz fiyatı ve kaç litre gaz harcandığı 
     * bilgileri alınan bir aracın gidilen km için harcanan tl 
     * miktarını hesaplayan programı metot kullanarak yazınız.
Örnek; 
Kaç km yol yaptı:100
Kaç litre gazharcadı:50
Gazın litre fiyatı(tl):2.8
Km başına harcanan tl miktarı : 50*2.8/100=1.4 tl para hacamıştır.

(gazfiyatı*litre)/yol=km başına tl miktarı


 */
function kacTl($gazFiyati,$litre,$yol){
    return ($gazFiyati*$litre)/$yol;
}
echo kacTl(30,10,100);
    ?>
</body>
</html>