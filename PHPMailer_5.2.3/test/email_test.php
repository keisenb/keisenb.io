require 'PHPMailer_5.2.3/class.phpmailer.php';

$mail = new PHPMailer();
$mail->IsMail();

$mail->AddAddress("kyle.eisenbarger@gmail.com");
$mail->Subject = "Test 1";
$mail->Body = "Test 1 of PHPMailer.";

// CUSTOMISED SIGN EMAIL : START
$mail->sign_cert_file="PHPMailer_5.2.3/user.pem";
$mail->sign_key_file="PHPMailer_5.2.3/server.key";
$mail->sign_key_pass="Locked#1";
// CUSTOMISED SIGN EMAIL : END

$mail->Send(); // Send encrypted email!
