<?php
require 'PHPMailer/PHPMailerAutoload.php';
  ob_start();
  

  include('db.php');
session_start();
$id = $_GET['l_id'];
   $m = "SELECT licence_confirm.*,user.*,licence_register.*,vehical.* FROM licence_confirm,user,licence_register,vehical WHERE confirm_id='".$id."' AND user.user_id=licence_confirm.confirm_user_id AND licence_register.licence_register_id=licence_confirm.licence_register_id AND vehical.vehical_id=licence_confirm.confirm_vehical_id";
   $m1 = mysqli_query($con,$m);
   $m2 = mysqli_fetch_assoc($m1);

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
$mail->addReplyTo($m2['user_email']);
$mail->addAddress($m2['user_email']);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML


$bodyContent = '<h1>Thank you for Booking</h1>';
$bodyContent .= '<p>Your customer id is <b>'.$m2['licence_num'].'</b></p>';



$mail->Subject = 'OTP Verification';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent. Try After some Time ';
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	// $_SESSION['verify_otp'] = $random_num;
    header("location:create_licence.php?l_id=".$id);
}
?>
