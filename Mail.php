<?php
   ini_set( 'display_errors', 1 );
   error_reporting( E_ALL );
   $client = "!?)))";
   $clientName = ")(()";
   $from = "noreply@globalseedtrust.com";
   $to = "williamschnoebelen9@gmail.com";
    $message ='<html><body>';
    $message .='<h1 style="color:green;margin-bottom:5px;">A warm welcome to Global Seed Trust !</h1>';
    $message .='<img align="center" src="https://globalseedtrust.net/assets/Welcome.jpeg">';
    $message .="<p style="margin-top:7px;">Dear .$to</p>";
    $message .='<p  align=“center”  style="color:black;">A warm welcome! We are very grateful for the trust you have placed in us and look forward to helping you on your way to true wealth management.

Global Seed Trust is a trusted and advanced asset management company based in Belgium with specialised knowledge and years of experience. When you decide to become our client, you can count on a 24 / 7 overview of how your portfolio is compiled, managed and optimised. And if you have any questions, you do not have to talk to robots: we are friendly folks you can ask questions if you need to.

We are ever so grateful for your trust and we wish you a fruitful harvest in the financial market. Your passion is our satisfaction!

W: www.globalseedtrust.net
E: customerservice@globalseedtrust.org
T: +32460221494</p>';
$message .= '</body></html>';
  //The content-type header must be set when sending HTML email
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
   $headers = "From:" . $from;
   if(mail($to,$message, $headers)) {
      echo '<script>alert("Message has been Sent.");</script>';
      echo '<script>document.getElementById("form").reset();</script>';
    } else {
      echo '<script>alert("Message Was Not Sent.");</script>';
   } 
   
?>