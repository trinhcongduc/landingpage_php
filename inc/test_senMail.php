<?php

include "./lib/PHPMailer/src/PHPMailer.php";
include "./lib/PHPMailer/src/Exception.php";
include "./lib/PHPMailer/src/OAuth.php";
include "./lib/PHPMailer/src/POP3.php";
include "./lib/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try{
//Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'vembaeduvn@gmail.com';                 // SMTP username
    $mail->Password = '113113aa';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('vembaeduvn@gmail.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('vembaeduvn@gmail.com');               // Name is optional
    //    $mail->addReplyTo('vembaeduvn@gmail.com', 'Information');
    //    $mail->addCC('cc@example.com');
    //    $mail->addBCC('bcc@example.com');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    die("OKOKOKOOKOKO");
}catch (Exception $e){
    echo 'ERROR: Message has been sent'.$mail->ErrorInfo;
}