<?php 

require("vendor/phpmailer/phpmailer/PHPMailerAutoload.php");

$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host = "smtp.mailgun.org";
$mail->SMTPAuth = true;
$mail->Username ='postmaster@sandbox1f7664facb124426bb64f1eafe048755.mailgun.org';
$mail->Password='secret';
$mail->SMTPSecure = 'tls';

$mail->From ='ansteph09@gmail.com';
$mail->FromName ='Exister Andre';
$mail->addAddress('ls20045@gmail.com');

$mail->WordWrap =50;

$mail->Subject = 'Geckoo';
$mail->Boby ='Testing some mailgun email sent';

if($mail->send()){
    echo 'Message could not be sent';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}




?>