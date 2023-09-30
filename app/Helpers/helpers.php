<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!function_exists('sendEmail')){
    function sendEmail ($mailConfig){
        require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer (true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = enc('EMAIL_HOST');
$mail->SMTPAuth = true;
$mail->Username = env('EMAIL_USERNAME');
$mail->Password = env('EMAIL_PASSWORD');
$mail->SMTPSecure = env('EMAIL_ENCRYPTION');  
$mail->Port = env('EMAIL_PORT');
$mail->setFrom($mailConfig['mail_from_email'], $mailConfig['mail_from_name']);
$mail->addAddress($mailConfig['mail_recipient_email'], $mailConfig['mail_recipient_name']);
$mail->isHTML(true);
$mail->Subject = $mailConfig['mail_subject'];
$mail->Body = $mailConfig['mail_body'];
if($mail->send()){
    return true;
} else {
    return false;
}
}
}
