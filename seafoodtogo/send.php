
<?php
$email = $_POST["email"];
$name = $_POST["name"];
$subject = $_POST["subject"];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;
 
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

 
$mail = new PHPMailer(true);
try {
    // $email = $_POST["email"];
    // $name = $_POST["name"];
    // $subject = $_POST["subject"];
 
    $msg ='<!DOCTYPE html>
    <html lang="en"> 
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Greetings <strong> '.$name.'! </strong></p>
        <p>We have received your message. Thanks you for reaching out to us, '.$name.'!</p>
        <br><br>
        Enjoy your day!,<br>
        🦐 Seafood to Go Staff 🦀<br>
        <strong></b> SeafoodtoGo</strong>
 
    </body>
    </html>';
 
 
    // $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'staff@seafoodtogo.store';
    $mail->Password = 'Xymondarcen27-';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SMTPOptions = array('ssl' => array('verify_peer'       => false,
                                          'verify_peer_name'  => false,
                                          'allow_self_signed' => true));
 
    $mail->setFrom('staff@seafoodtogo.store', 'Seafood to Go Staff');
 
    $mail->addAddress($email); 
    
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $msg;
 
    $mail->send();
    echo 'Sent!';
} catch (Exception $e){
    echo 'Error Sending!';
}
    header('location: index.php');

    