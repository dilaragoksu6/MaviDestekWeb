<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link rel="stylesheet" href="style.css">
    <script src="toolbar.js"> </script>
    <style> 
        .contact-info {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .map-container {
            margin-top: 20px;
            position: relative;
            width: 100%;
            height: 400px;
        }
        .map {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            margin-top: 80px;
        }
        .contact-form {
            flex: 1;
            margin-right: 20px;
        }
        .title {
            text-align: center;
            margin-top: 20px;
        }
        body.iletisim-page .navbar {
    background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("resimler/cocuk2.png");
    background-size: 100% 100%;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1;
}

body.iletisim-page {
    background-image: linear-gradient(rgba(27, 25, 25, 0.75), rgba(27, 25, 25, 0.75)), url("resimler/maviarkaplan.jpg");
    background-size: 100% 100%;
    color: rgb(255, 255, 255);
    font-optical-sizing: 10;
}
.contact-form {
    margin-top: 20px;
    
  
}

.contact-form label {
    display: block;
    margin-bottom: 5px;
}

.contact-form .form-input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.contact-form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.contact-form .btn-submit {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.contact-form .btn-submit:hover {
    background-color: #45a049;
}

.alert {
    margin-bottom: 10px;
    padding: 8px;
    border-radius: 4px;
}
.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

    </style>
</head>
<body class="iletisim-page">
    
    <div class="container">
        
        <div class="contact-form">
            <h1>İletişim Formu</h1>
            <form class="contact-form" method="POST" action="mail-gonder.php">
    <?php if (isset($_GET['success'])) : ?>
    <div class="alert alert-success">Mesajınız başarıyla iletildi.</div>
    <?php endif ?>
    <label for="adi_soyadi">Adınız Soyadınız :</label>
    <input class="form-input" name="adi_soyadi" type="text" required="">
    <label for="telefon">Telefon Numaranız :</label>
    <input class="form-input" name="telefon" type="text" required="">
    <label for="email">Mail Adresiniz : </label>
    <input class="form-input" name="email" type="email" required="">
    <label for="mesaj">Mesajınız :</label>
    <textarea class="form-input" id="message" name="mesaj" rows="10" required=""></textarea>
    <button class="btn-submit" type="submit">Gönder</button>
</form>

        </div>
        <div class="contact-info">
            <h1>İletişim Bilgileri</h1>
            <p>Telefon: 0533 333 33 33</p>
            <p>E-posta: mavidestekinfo@gmail.com</p>
            <p>Adres: Bahçeşehir 1. Kısım, Vali Recep Yazıcıoğlu Cd Berit 6 Villa 4, 34488 Başakşehir/İstanbul</p>
            <div class="map-container">
                <iframe class="map" src="https://www.google.com/maps/d/u/4/embed?mid=1110Ss6DFCZ8Uy77Xt95NAk5nSb9M4Eg&ehbc=2E312F" width="640" height="480"></iframe>
            </div>
        </div>
    </div>
</body>
</html>
