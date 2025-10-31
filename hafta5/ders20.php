<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //FONKSİYONLARA GÖNDERİLEN YAPAY PARAMETRELER
    /**Eğer fonksiyona gönderilecek paramtere sayısında belirsizlik varsa 
     * bu yöntemleri kullanırız
     🧠 Çalışma Mantığı:
func_num_args() → kaç tane argüman geldiğini verir.
func_get_args() → tüm argümanları dizi olarak verir.
func_get_arg(n) → n. argümanı döndürür (örnek: func_get_arg(0) ilkini verir).  */
    function argumanlar(){
        $adet=func_num_args();
        if($adet==0) return;

        echo $adet. 'parametre bulundu'."<br>";
        if($adet>1){
            $dizi=func_get_args();
            foreach($dizi as $deger){
                echo $deger.'<br>';
            }
        }
        else 
        {
            echo func_get_arg(0)."<br>";
        }
    }

   // argumanlar(3,5,8);
   // argumanlar('a','b','c');
    argumanlar(2,6,9,52,2);
    ?>
</body>
</html>