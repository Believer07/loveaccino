<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'loveaccino.marketing@gmail.com';                     // SMTP username
    $mail->Password   = 'asdfghjkl@12345';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('loveaccino.marketing@gmail.com', 'Loveaccino');
    $mail->addAddress('harshhingorani7@gmail.com', 'User');

    $Body = '<p>Ankh Dikhata Hai Baap Ko</p>';
    // echo $Body
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'M Hoon Khalnayak';
    $mail->Body    = $Body;
    //$mail->AltBody = strip_tags($Body);

    $mail->Send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
