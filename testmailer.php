<?php
   require "vendor/autoload.php";
 
   use PHPMailer\PHPMailer\PHPMailer;
   
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 2;
   $mail->Host = 'smtp.titan.email';
   $mail->Port = 465;
   $mail->SMTPAuth = true;
   $mail->SMTPSecure="ssl";
   $mail->Username = 'customerservice@globalseedtrust.net';
   $mail->Password = 'Iamwilliams1';
   $mail->setFrom('customerservice@globalseedtrust.net', 'Your Name');
   $mail->addReplyTo('customerservice@globalseedtrust.net', 'Your Name');
   $mail->addAddress('williamschnoebelen9@gmail.com', 'Receiver Name');
   $mail->Subject = 'Testing PHPMailer';
   //$mail->msgHTML(file_get_contents('message.html'), __DIR__);
   $mail->Body = 'This is a plain text message body';
   //$mail->addAttachment('test.txt');
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
       echo 'The email message was sent.';
   }
?>