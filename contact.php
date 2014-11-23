<?php
$email = $_POST['email'] ;
$message = $_POST['comments'] ;
$name = $_POST['name'] ;
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'sjohnson12wp@gmail.com'; //email account that actually sends the email
$mail->Password = 'WKOtest1'; //password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->From = 'sjohnson12wp@gmail.com';
$mail->FromName = 'Submission Update';
$mail->addAddress('sqwahba@gmail.com', 'Sarah Johnson'); //account the recieves the email
$mail->addReplyTo($email, $name); //sets the account that will be replied to
$mail->WordWrap = 50;
$mail->isHTML(true);
$mail->Subject = 'Contact Form Submission';
$mail->Body = "$name - $email submitted:<br>$message";
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

/* Redirect visitor to the thank you page */
header('Location: thanks.html');
exit();
?>