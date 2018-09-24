<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
	$activation=time();
	$time = time();
	$base_url="localhost:8080/hackathon/";
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'rgireemaisrani@gmail.com';                 // SMTP username
    $mail->Password = '1604rgi1504';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('rgireemaisrani@gmail.com', 'Mailer');
    $mail->addAddress('rgireemaisrani@gmail.com');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "DISCARD";
    $mail->Body    = ' Product Name: '.$_POST['name'].'<br>Brand: '.$_POST['brand'].'<br>Quantity: '.$_POST['quantity'].'<br>Reason: '.$_POST['reason'];
    $mail->send();
    echo 'Message has been sent';
	header("Location: discard.php");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}