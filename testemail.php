<?php
/**
* Simple example script using PHPMailer with exceptions enabled
* @package phpmailer
* @version $Id$
*/

require 'PHPMailer_5.2.3/class.phpmailer.php';
ob_start();

try {
	$mail = new PHPMailer(true); //New instance, with exceptions enabled


//	$body             = file_get_contents('contents.html');
//	$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
	$body = $_POST['message'];

	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = 'ssl';
	$mail->Port       = 25;                    // set the SMTP server port
	$mail->Host       = "mail.kyle-eisenbarger.com"; // SMTP server
	$mail->Username   = "admin@kyle-eisenbarger.com";     // SMTP server username
	$mail->Password   = "secretpasswordword";            // SMTP server password

	$mail->IsSendmail();  // tell the class to use Sendmail


	$from = $_POST['email'];
	$name = $_POST['name'];

	$mail->AddReplyTo($from, $name);


	$mail->From       = "no-reply@kyle-eisenbarger.com";
	$mail->FromName   = "Kyle Eisenbarger";

	//$to = "kyle.eisenbarger@gmail.com";
	$mail->AddBCC("kyle.eisenbarger@gmail.com", "test");
	//$mail->AddCC("something@gmail.com", "bla");
	//$to_sender = "keisenb@ksu.edu"

	$mail->AddAddress($from);

	$mail->Subject  = "Confirmation of message received! Please do not reply to this email.";

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML($body);

	$mail->IsHTML(true); // send as HTML

//	$mail->sign_cert_file="PHPMailer_5.2.3/user.pem";
//	$mail->sign_key_file="hHPMailer_5.2.3/server.key";
//	$mail->sign_key_pass="Locked#1";

	$mail->Send();

	//echo 'Message has been sent.';
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}

$url = '/#'; // this can be set based on whatever

// clear out the output buffer
while (ob_get_status())
{
    ob_end_clean();
}

// no redirect
header( "Location: $url" );


?>
