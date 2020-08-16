<?php  
include('preincludes/dbh.php');
include('preincludes/session.php');

$to=$_SESSION["email"];
                          

require_once('C:\Users\varsh\Desktop\new\htdocs\emss\class.phpmailer.php');

$mail = new PHPMailer;
$email='usemamulya@gmail.com';

  if(!$mail->validateAddress($email)){
    echo 'Invalid Email Address';
    exit;
  }


  $email_body = "";
  $email_body .= "Assignment successfully submitted";

  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "tls"; 
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->Username = "usemamulya@gmail.com";
  $mail->Password = "Amulya,123";
  
  $mail->setFrom($email, 'amulya');
  $mail->addAddress($to, 'Student'); 
  $mail->isHTML(true);                               
  $mail->Subject = "Update on assignment submission";
  $mail->Body = $email_body;

  if(!$mail->send()) {
    echo 'Message could not be sent. ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
  }
  //header
mysqli_close($link);
?>


