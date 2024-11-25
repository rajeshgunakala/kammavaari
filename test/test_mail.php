<?php
date_default_timezone_set('Etc/UTC');
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 2;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port       = '465';
$mail->Host       = "198-38-84-197.cprapid.com";
$mail->Username   = "info@kammavaari.com";
$mail->Password   = "Kamm@M@tr1";
$mail->IsHTML(true);
$mail->AddAddress("bhaskar.msc2005@gmail.com", "Bhaskar");
$mail->SetFrom("info@kammavaari.com", "Elite Cosmetics");
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
$content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  //var_dump($mail); kammagrand@123
} else {
  echo "Email sent successfully";
}
?>