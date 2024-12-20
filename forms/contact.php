<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../assets/vendor/PHPMailer-6.9.1/src/Exception.php';
require '../assets/vendor/PHPMailer-6.9.1/src/PHPMailer.php';
require '../assets/vendor/PHPMailer-6.9.1/src/SMTP.php';
require '../assets/vendor/recaptcha-master/src/autoload.php';

//Get config
$conf = json_decode(file_get_contents("../data/config.json"));
$info = json_decode(file_get_contents("../data/info.json"));

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->setLanguage('fr', '../assets/vendor/PHPMailer-6.9.1/language/phpmailer.lang-fr.php/');
$mail->CharSet = PHPMailer::CHARSET_UTF8;
$mail->isSMTP();
//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
if ($conf->env == "test" || $conf->env == "prod") {
  $mail->SMTPDebug = SMTP::DEBUG_OFF;
} else {
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;
}
//Set the hostname of the mail server
$mail->Host = $conf->mail->host;
//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = $conf->mail->port;
//Set the encryption mechanism to use:
//PHPMailer::ENCRYPTION_SMTPS (implicit TLS on port 465) or
//PHPMailer::ENCRYPTION_STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = $conf->mail->userName;
//Password to use for SMTP authentication
$mail->Password = $conf->mail->password;

$err = false;
$msg = "";

$name = "";
$email = "";
$subject = "";
$message = "";
$phone = "";

//reCaptcha validation
$recaptcha = new \ReCaptcha\ReCaptcha($conf->reCaptchaAPIKeySecret);
$resp = $recaptcha->verify($_POST['g-recaptcha-response']);
if ($resp->isSuccess()) {
  if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Europe/Paris');
    $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
      && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    //Apply some basic validation and filtering to the subject
    if (array_key_exists('subject', $_POST)) {
      $subject = substr(strip_tags($_POST['subject']), 0, 255);
    } else {
      $msg .= 'Erreur: Aucun sujet.\n';
      $err = true;
    }

    //Apply some basic validation and filtering to the telephone number
    if (array_key_exists('phone', $_POST)) {
      if (preg_match("#^(\d{2}[ \.]?){4}\d{2}$#", $_POST['phone'])) {
        $phone = $_POST['phone'];
      } else {
        $msg .= 'Erreur: Numéro de téléphone invalide.\n';
        $err = true;
      }
    }

    //Apply some basic validation and filtering to the query
    if (array_key_exists('message', $_POST)) {
      //Limit length and strip HTML tags
      $message = substr(strip_tags($_POST['message']), 0, 16384);
    } else {
      $message = '';
      $msg = 'Erreur: Aucun message.\n';
      $err = true;
    }
    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
      //Limit length and strip HTML tags
      $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
      $msg .= 'Erreur: Aucun nom.\n';
      $err = true;
    }

    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
      $email = $_POST['email'];
    } else {
      $msg .= 'Erreur: Addresse mail invalide.\n';
      $err = true;
    }

    //It's important not to use the submitter's address as the from address as it's forgery,
    //which will cause your messages to fail SPF checks.
    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
    $mail->setFrom($conf->mail->userName, $name);
    //Setting receiver adress mail for production environment
    // $mail->addAddress($info->contact->email);
    //Setting receiver adress mail for dev and test  environment
    $mail->addAddress($conf->mail->emailTest);

    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($email, $name)) {
      $mail->Subject = "Formulaire de contact via le site web : " . $subject;
      $mail->Body = "Nom : " . $name . "\r\nMail : " . $email . "\r\nNuméro de téléphone : " . $phone . "\r\nSujet : " . $subject . "\r\nMessage : \r\n" . $message;

      //Send the message, check for errors
      if (!$mail->send()) {
        //The reason for failing to send will be in $mail->ErrorInfo
        //but it's unsafe to display errors directly to users - process the error, log it on your server.
        if ($isAjax) {
          http_response_code(500);
        }

        $response = [
          "status" => false,
          "message" => 'Désolé, quelque chose s\'est mal passé lors l\'envoi du mail. Veuillez réessayer plus tard.'
        ];
      } else {
        $response = [
          "status" => true,
          "message" => 'Message envoyé !'
        ];
      }
    } else {
      $response = [
        "status" => false,
        "message" => 'Erreur: Addresse mail invalide.'
      ];
    }

    if ($isAjax) {
      header('Content-type:application/json;charset=utf-8');
      echo json_encode($response);
      exit();
    }
  }
} else {
  echo json_encode([
    "status" => false,
    "message" => 'Erreur: Google reCaptcha invalide.'
  ]);
  exit();
}
