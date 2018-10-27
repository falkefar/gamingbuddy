<?php 
	include "../../core/init.php"; 

	date_default_timezone_set('Etc/UTC');
	require '../../phpmailer/PHPMailerAutoload.php'; 

	$mail = new PHPMailer; 
	$mail->isSMTP(); 

	$mail->SMTPDebug 	= 0; 
	$mail->Debugoutput 	= 'html'; 
	$mail->Host 		= 'asmtp.unoeuro.com'; 
	$mail->Port 		= 587; 
	$mail->SMTPSecure 	= 'tls'; 
	$mail->SMTPAuth 	= true; 
	$mail->Username 	= "pharma@guldstoev.com"; 
	$mail->Password 	= "kongerne11";
	$mail->CharSet 		= 'UTF-8';

	$mail->setFrom('pharma@guldstoev.com', 'template'); 
 
		if (isset($_SESSION["vendor"])) {
			$sendEmailTo = decrypt($_SESSION["vendor"]);
		} else if (isset($_SESSION["customer"])) {
			$sendEmailTo = decrypt($_SESSION["customer"]);
		} else if($_COOKIE) {
			if($_COOKIE["email"]) {
				$sendEmailTo = decrypt($_COOKIE["email"]);
			} else if ($_COOKIE["vemail"]) {
				$sendEmailTo = decrypt($_COOKIE["vemail"]);
			}
		} else {
			urlLocation("../../opret-bruger");
		}

	$mail->addReplyTo($sendEmailTo); 
	$mail->addAddress($sendEmailTo);
	$mail->isHTML(true);                                

?>