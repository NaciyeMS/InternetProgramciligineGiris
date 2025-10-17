<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form1" name="form1" action="sayfa2.php" method="post" >
    <fieldset>
    <legend>Kullanıcı Girişi</legend>
     <p><label>
        Adınız: <input type="text" name="k_ad" value="" />
        </label>  </p>
    <p> <label>
       Şifreniz:<input type="password" name="sifre" value="" />
       </label> </p>
    <p><label> 
       <input type="submit" name="gonder"  value="GÖNDER" />
       </label>  </p>
    <p><label> 
       <input type="reset" name="gonder"  value="TEMİZLE" />
       </label>  </p>


</fieldset>
</form>
<?php 
/* 
--> FORM NAME : Form' a isim vermek için 
--> ACTION: Form'da herhangi bir işlem yapıldığında yönlendirelecek 
sayfa için ACTİON
--> METHOD: yukarıdaki işlemde kullanılacak metot için METHOD
    -GET metotu ile yapılan işlemlerde veriler url sonuna eklenir.
       Url 92 karakter ile sınırlandığı için bu yöntem tercih edilmez.
    -POST metotunda ise  gönderilen veriler html isteğine eklenir. Bu yöntemde url sonuna form verileri eklenmez.
Açılacak sayfanın açılma kısmını TARGET kısmında belirleyebilirsiniz.
--> FIELDSET: Bir form içerisinde ziyaretçilerden istenebilecek bilgileri 
içerik benzerliklerine göre gruplayabilirsiniz. Bu işlem formun
anlaşılmasını kolaylaştırır. 
/////////////////////
Eklenen form öğeleri input tagı ile eklenir
<input type="text" --> eklenirse bir textbox eklenir
<input type="password" --> eklenirse girilen şifreler için * lar konulan bir textbox eklenir
<input type="submit"  --> kullanılırsa bir buton eklenir
<input type="reset"  --> kullanılırsa içinde bulunduğu formu temizleyen bir buton eklenmiş olur. 

name=    --> tagları javascript, ajax, php gibi kodlama için işlemleri form öğesinin  değişken ismidir. 
value=   --> tagları öğeler üzerinde görüntülecek yazılardır. 

POST METODU-->Formlar ile gönderilen verileri daha güvenli bir şekilde
 göndermek için POST metotu kullanılır.

*/

?>
</body>
</html>