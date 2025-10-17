<form action="form2.php" method="post">
Adınız: <input type="text" name="ad" id="ad"><br>
Şifreniz: <input type="password" name="sifre" id="sifre"><br>
Ülkeniz: 
<select name="ulke" id="u">
    <option value="Türkiye">Türkiye</Table></option>
    <option value="Almanya">Almanya</option>
    <option value="Filistin">Filistin</option>
</select><br>
<input type="checkbox" name="etkinlik" id="a">
Etkinliklerden haberdar olmak istermisiniz
<br>
hangi meyveleri seversiniz<br>
<input type="checkbox" name="meyveler[]" id="e" value="Elma">Elma  <br>
<input type="checkbox" name="meyveler[]" id="a" value="Armut">Armut<br>
<input type="checkbox" name="meyveler[]" id="m" value="Muz">Muz<br>
<input type="checkbox" name="meyveler[]" id="k6" value="Kivi">Kivi<br>

<input type="submit" value="Gönder">
<input type="reset" value="Temizle">
</form>