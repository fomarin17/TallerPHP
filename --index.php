<?php
require 'class.phpmailer.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'fomarin17@misena.edu.co';                 // SMTP username
$mail->Password = 'Th1nkpad2186';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom('fomarin17@misena.edu.co', 'Mailer');
$mail->addAddress('fomarin17@misena.edu.co', 'Joe User');     // Add a recipient
$mail->addAddress('fomarin17@misena.edu.co');               // Name is optional
$mail->addReplyTo('fomarin17@misena.edu.co', 'Information');
$mail->addCC('fomarin17@misena.edu.co');
$mail->addBCC('fomarin17@misena.edu.co');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}