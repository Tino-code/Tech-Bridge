<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["Message"];
$subject="Message from Webmaster";
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "martintetteh1350@gmail.com";
$mail->Password = "mrsz jhzh pgjn bfzg";

$mail->setFrom($email, $name);
$mail->addAddress("tettehmartin217@gmail.com","Martin Tetteh");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: contact.html");