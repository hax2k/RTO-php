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
$mail->Password = 'yashtailor0808'; // SMTP password
$mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                 // TCP port to connect to

$mail->setFrom('tailoryash008@gmail.com');
$mail->addReplyTo($forgot_email);
$mail->addAddress($forgot_email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML


$bodyContent = '<h1>Thank you for Booking</h1>';
$bodyContent .= '<p>Your customer id is <b>'.$_SESSION['id'].'</b></p>';
$bodyContent .= '<p>Your slot no is <b>'.$_SESSION['slot_no'].'</b></p>';
$bodyContent .= '<p>Your slot time is <b>'.$_SESSION['slot_time'].'</b></p>';
$bodyContent .= '<p>Your slot booking date is <b>'.date('d-m-Y',strtotime($_SESSION['date'])).'</b></p>';


$mail->Subject = 'Thanks For Registration';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent. Try After some Time ';
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	// $_SESSION['verify_otp'] = $random_num;
    header('location: schedule.php');
}
?>
