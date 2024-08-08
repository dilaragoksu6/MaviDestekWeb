<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gönüllü Ol</title>
    <link rel="stylesheet" href="style.css">
    <script src="toolbar.js"> </script>
</head>
<body class="gonullu-page">
    
    <div class="content">
    <h1>Gönüllü Ol</h1><br>
        <p>Mavi Destek olarak, lösemeli çocuklara ve ailelerine yardım etmek amacıyla gönüllülerimizin desteğine ihtiyacımız var. Siz de Mavi Destek ailesine katılarak hayatlarına dokunabilir, umut olabilirsiniz.</p>
        <p>Gönüllü olmak için sağ taraftaki formu doldurun ve bize ulaşın. İhtiyaç sahiplerine yardım etmek, gülümsemelerini yeniden kazandırmak ve onlara destek olmak için bir adım atın.</p><br>
        <p>Bir Mavi Destek gönüllüsü olarak, etkinliklere katılabilir, farklı projelerde yer alabilir ve bilinçlendirme çalışmalarına destek olabilirsiniz. Sizden herhangi bir uzmanlık veya deneyim beklemiyoruz, sadece kalbinizdeki iyilik duygusunu paylaşmanız yeterli.</p>
        <p>Mavi Destek olarak, çocukların hayallerini gerçekleştirebilmek için sizinle birlikte çalışmak için sabırsızlanıyoruz. Bir adım atın, hayatlarına dokunun ve umut olun.</p>
        <p>Gönüllü olmak için formu doldurduktan sonra size en kısa sürede geri dönüş yapacağız. Teşekkür ederiz.</p>
    </div>
    <form class="volunteer-form" method="POST" action="gonullu-kaydet.php">
        <?php if (isset($_GET['success'])) : ?>
        <div class="alert alert-success">Gönüllü olduğunuz için teşekkürler.</div>
        <?php endif ?>
        <label for="ad">Adınız ve Soyadınız:</label>
        <input type="text" name="adi_soyadi" required>

        <label for="yas">Yaşınız:</label>
        <input type="number" name="yas" required>

        <label for="sehir">Yaşadığınız Şehir:</label>
        <input type="text" name="sehir" required>

        <label for="email">E-posta Adresiniz:</label>
        <input type="email" name="email" required>

        <label for="telefon">Telefon Numaranız:</label>
        <input type="text" name="telefon" required>

        <label for="mesaj">Kendinizi Tanıtın:</label>
        <textarea id="mesaj" name="mesaj" rows="4" required></textarea>

        <button type="submit">Gönder</button>
    </form>
</body>
</html>
