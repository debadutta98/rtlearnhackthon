
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendTO($message,$to,$subject)
{
//Load Composer's autoloader
require 'vendor/autoload.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

try {
   $mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port       = 465;
$mail->Host       = "smtp.mail.yahoo.com";
$mail->Username   = "debadutta_panda90@yahoo.com";
$mail->Password   = "kuazrgjmiakycsjh";
    $mail->setFrom('debadutta_panda90@yahoo.com', 'rtlearn');
      //Add a recipient
    $mail->addAddress("{$to}");              //Name is optional
    $mail->addReplyTo('debadutta_panda90@yahoo.com', 'rtlearn');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "{$subject}";
    $mail->Body    = "{$message}";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
sleep(60);
if(!$mail->Send()) {
echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
