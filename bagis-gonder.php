<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email = isset($_POST['email']) ? $_POST['email'] : null;

$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Konu';

$content = isset($_POST['content']) ? $_POST['content'] : null;

if(!$email)
{
    echo "E-posta adresini girin";
}

elseif(!$content)
{
    echo "Lütfen mail içeriğini yazın";
}
else {
    $mail= new PHPMailer(true);

    try{
//Server settings
$mail->SMTPDebug = 0;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'mavidestekinfo@gmail.com';                     //SMTP username
$mail->Password   = 'tpjljvncmduacigl';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->CharSet='UTF-8';
$mail->setlanguage('tr');
//Recipients
$mail->setFrom('mavidestekinfo@gmail.com', 'bagis - formu');
$mail->addAddress('mavidestekinfo@gmail.com', 'mavi destek');     //Add a recipient

 if (isset($_FILES['attachment']['name'])){
    $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
}
$mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;
    $mail->send();
   

    }
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        die();
}
header("Location:bagis.php?success=1");
}
?>