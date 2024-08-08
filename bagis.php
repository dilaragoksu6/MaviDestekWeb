<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bağış Yap | Mavi Destek</title>
    <link rel="stylesheet" href="style.css">
    <script src="toolbar.js"></script>
    <style>
      body.bagis-page .navbar {
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("resimler/cocuk2.png");
        background-size: 100% 100%;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1;
      }

      body.bagis-page {
        background-image: linear-gradient(rgba(27, 25, 25, 0.75), rgba(27, 25, 25, 0.75)), url("resimler/maviarkaplan.jpg");
        background-size: 100% 100%;
        color: rgb(255, 255, 255);
        font-optical-sizing: 10;
      }

      .form-container {
        width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #436584;
        border-radius: 5px;
      }

      .form-container input[type="text"],
      .form-container textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        font-size: 14px;
      }

      .form-container input[type="file"] {
        margin-top: 10px;
      }

      .form-container button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 14px;
      }

      .form-container button[type="submit"]:hover {
        background-color: #45a049;
      }

      .alert {
        padding: 10px;
        margin-bottom: 10px;
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        border-radius: 3px;
      }

      .alert.alert-success {
        background-color: #d4edda;
        color: #155724;
        border-color: #c3e6cb;
      }
      
    </style>
</head>
<body class="bagis-page">
<div class="content">
    <p>Mavi Destek, SMA ve lösemili çocuklara yardım etmek için bağışları kabul eden bir kuruluştur. Siz de bu önemli çalışmalara destek olmak için bağış yapabilirsiniz. Bağışlarınızla çocukların hayatlarına umut ve güzellik katmış olursunuz.</p><br>
    <p>Bağış yapmak için sağ taraftaki formu doldurun ve gerekli bilgileri sağlayın.Belirtilen IBAN adresine bağışınızı gönderin ve dekontu dosya ekle kısmından forma ekleyin.</p>
    </div>
    <div class="form-container">
        <h1>IBAN :</h1>
        <a>TR64 0001 0090 1012 3960 4050 01</a>
        <form action="bagis-gonder.php" method="POST" enctype="multipart/form-data">
            <?php if (isset($_GET['success'])) : ?>
            <div class="alert alert-success">Bağışınız için teşekkürler.</div>
            <?php endif ?>
            <input type="text" name="email" required placeholder="Email belirtiniz"><br>
            <input type="text" name="subject" required placeholder="Email konusu"><br>
            <textarea name="content" cols="30" rows="10" placeholder="Epostanın içeriği"></textarea><br>
            <input type="file" name="attachment"><br>
            <button type="submit">Gönder</button>
        </form>
    </div>
</body>
</html>
