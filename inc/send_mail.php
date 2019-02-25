<?php

define('ROOT', dirname(dirname(__FILE__)) . '/');

include "./lib/PHPMailer/src/PHPMailer.php";
include "./lib/PHPMailer/src/Exception.php";
include "./lib/PHPMailer/src/OAuth.php";
include "./lib/PHPMailer/src/POP3.php";
include "./lib/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($email_config,$content)
{

    $mail = new PHPMailer(true);

    try {
        //Server settings
    $mail->SMTPDebug = 2;                                                       // Enable verbose debug output
    $mail->isSMTP();                                                            // Set mailer to use SMTP
    $mail->Host = $email_config->host;                                          // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                                     // Enable SMTP authentication
    $mail->Username = trim($email_config->email_send);                                     // SMTP username
    $mail->Password = trim($email_config->pass_send);                                     // SMTP password
    $mail->SMTPSecure = 'tls';                                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $email_config->port;

    //Recipients
    $mail->setFrom(trim($email_config->email_send),$email_config->sender_name);
    $mail->addAddress(trim($email_config->email_receive), $email_config->sender_name);    // Add a recipient
    //$mail->addAddress($email_config->email_send);                                // Name is optional


    //Content
    $mail->isHTML(true);                                                    // Set email format to HTML
    $mail->Subject = $email_config->mail_title;
    $mail->Body = $content;
//   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'ERROR: Message has not been sent' . $mail->ErrorInfo;
    }
}

?>