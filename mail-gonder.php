<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
if( $_POST)
{

  $adi_soyadi = $_POST ['adi_soyadi'];
  $telefon = $_POST ['telefon'];
  $email = $_POST ['email'];
  $mesaj = $_POST ['mesaj'];

  $mail_icerik = "Merhaba yönetici, yeni bir iletisim formu gönderildi";
  $mail_icerik .= "Adı Soyadı : $adi_soyadi<br>";
  $mail_icerik .= "Telefon : $telefon<br>";
  $mail_icerik .= "Email : $email<br>";
  $mail_icerik .= "Mesaj : $mesaj<br>";
  
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mavidestekinfo@gmail.com';                     //SMTP username
    $mail->Password   = 'tpjljvncmduacigl';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mavidestekinfo@gmail.com', 'iletim - formu');
    $mail->addAddress('mavidestekinfo@gmail.com', 'mavi destek');     //Add a recipient
   

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->CharSet='UTF-8';
    $mail->Subject = 'sitenizden iletisim formu gönderildi';
    $mail->Body    = $mail_icerik;
    $mail->AltBody = $mail_icerik;

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    die();
}
header("Location:iletisim.php?success=1");
}

?>