<?php
require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
$errors = array(
    'name' => '',
    'email' => '',
    
);
if (isset($_POST["submit"])){


    $name = trim($_POST['name']);
    $emails = trim($_POST['email']);

    if (empty($name) || !preg_match('/^[a-zA-Z\s\-]{5,}$/', $name)) {
        $errors['name'] = "Please enter a valid full name with no numbers (at least 5 characters)";
    }


   
    if (empty($emails) || !filter_var($emails, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Please enter a valid email address";
    }





if (!array_filter($errors)) {

    $name = $_POST["name"];
$emails = $_POST["email"];
$message = $_POST["Message"];
$subject="An email has been sent from ".$emails;
$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "martintetteh1350@gmail.com";
$mail->Password = "mrsz jhzh pgjn bfzg";

$mail->setFrom($emails, $name);
$mail->addAddress("tettehmartin217@gmail.com","Martin Tetteh");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

  echo $emails;
 }
    
}