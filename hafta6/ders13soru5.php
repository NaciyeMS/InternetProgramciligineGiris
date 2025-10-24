<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geri Bildirim Formu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Geri Bildirim Formu</h2>
    <form action="ders13soru5sayfa2.php" method="post">
        <label>Adı ve Soyadı</label>
        <input type="text" name="adsoyad" placeholder="Adınızı ve soyadınızı yazın" required>

        <label>Email</label>
        <input type="email" name="email" placeholder="E-posta adresinizi yazın" required>

        <fieldset>
            <legend>Siteye ilişkin genel görüşünüz</legend>
            <label><input type="radio" name="gorus" value="iyi"> İyi</label>
            <label><input type="radio" name="gorus" value="orta"> Orta</label>
            <label><input type="radio" name="gorus" value="kotu"> Kötü</label>
        </fieldset>

        <fieldset>
            <legend>Bilgiye erişim kolaylığı</legend>
            <label><input type="radio" name="erisim" value="iyi"> İyi</label>
            <label><input type="radio" name="erisim" value="orta"> Orta</label>
            <label><input type="radio" name="erisim" value="kotu"> Kötü</label>
        </fieldset>

        <fieldset>
            <legend>Bilgilerin yeterliliği</legend>
            <label><input type="radio" name="yeterlilik" value="iyi"> İyi</label>
            <label><input type="radio" name="yeterlilik" value="orta"> Orta</label>
            <label><input type="radio" name="yeterlilik" value="kotu"> Kötü</label>
        </fieldset>

        <label>Sitemize ulaşma yönteminiz</label>
        <select name="ulasim">
            <option>Google</option>
            <option>Arkadaş Tavsiyesi</option>
            <option>Sosyal Medya</option>
            <option>Reklam</option>
            <option>Diğer</option>
        </select>

        <label class="checkbox">
            <input type="checkbox" name="etkinlik" checked>
            Etkinliklerden haberdar olmak ister misiniz?
        </label>

        <label>Önerileriniz</label>
        <textarea name="oneriler" rows="4" placeholder="Önerilerinizi buraya yazabilirsiniz..."></textarea>

        <div class="buttons">
            <button type="submit" class="gonder">Gönder</button>
            <button type="reset" class="temizle">Temizle</button>
        </div>
    </form>
</div>

</body>
</html>
