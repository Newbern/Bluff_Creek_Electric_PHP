<?php

require 'extenstions/PHPMailer/src/PHPMailer.php';
require 'extenstions/PHPMailer/src/SMTP.php';
require 'extenstions/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);


// Server settings
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'StevencNewbern@gmail.com';       // Your Gmail
$mail->Password   = 'ofjd xjie dikh kuvy';         // App password from Gmail
$mail->SMTPSecure = 'tls';                       // Encryption: 'tls' or 'ssl'
$mail->Port       = 587;                         // TLS port: 587, SSL port: 465

?>
    