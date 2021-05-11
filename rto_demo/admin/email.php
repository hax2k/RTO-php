<?php
require 'PHPMailer/PHPMailerAutoload.php';
session_start();
$forgot_email = $_SESSION['email'];
$random_num = rand(100000,999999);
$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'tailoryash008@gmail.com';          // SMTP username
$mail->Password = 'yashtailor008'; // SMTP password
$mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                 // TCP port to connect to

$mail->setFrom('tailoryash008@gmail.com');
$mail->addReplyTo($forgot_email);
$mail->addAddress($forgot_email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Verify your OTP</h1>';
$bodyContent .= '<p>Your OTP is <b>'.$random_num.'</b></p>';

$mail->Subject = 'OTP Verification';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent. Try After some Time ';
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	$_SESSION['verify_otp'] = $random_num;
    header('location: verify_otp.php');
}
?>
