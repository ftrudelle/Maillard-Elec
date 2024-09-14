<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../assets/vendor/PHPMailer-6.9.1/src/Exception.php';
require '../assets/vendor/PHPMailer-6.9.1/src/PHPMailer.php';
require '../assets/vendor/PHPMailer-6.9.1/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->setLanguage('fr', '../assets/vendor/PHPMailer-6.9.1/language/phpmailer.lang-fr.php/');

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;               //Enable verbose debug output
    $mail->isSMTP();                                     //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                            //Enable SMTP authentication
    $mail->Username   = json_decode(file_get_contents("./data/info.json"))->emailTest;    //SMTP username
    $mail->Password   = 'eqxq kuyi nalh nhfg';           //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;     //Enable implicit TLS encryption
    $mail->Port       = 465;                             //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $headers = "Content-type: text/html; charset=utf-8 \r\nFrom:" . $email . "\r\n";
    // WARNING: Be sure to change this. This is the address that the email will be sent to
    $to = json_decode(file_get_contents("./data/info.json"))->emailTest;
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    //Recipients
    $mail->setFrom($email, 'Mailer');
    $mail->addAddress($to);
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                     //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
