<?php
require 'mail/PHPMailerAutoload.php';

$mail = new PHPMailer;


$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                              
$mail->Username = 'Your_address_here';                
$mail->Password = 'Your_password_here';                 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;                                  

$mail->setFrom('vohoaianrog@gmail.com', 'HoaiAn Camera reset password');
$mail->addAddress('votinhthuong9@gmail.com', 'Invitation');     



$mail->isHTML(true);                                  

$mail->Subject = 'VO HOAI AN - ROG';
$mail->Body    = 'We can play Ghost Sniper 3! Yay!!!';
$mail->AltBody = 'New game unlocked.';

if(!$mail->send()) {
    echo 'Message could not be sent!';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent! Wo-hoo!';
}
?>