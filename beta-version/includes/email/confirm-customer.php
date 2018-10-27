<?php
	include "header.php";
	$mail->Subject = 'Velkommen til virksomehed - Bekræft din e-mail';

	 
	$mail->Body    = '

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bekræft bruger</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body style="background:#f9f9f9; color:#000;">
	<div style="height:50px">&nbsp;</div>
	<div style="font-family:tahoma; font-weight: light; width:800px; margin:50px auto; position:relative; border-radius:10px; -webkit-border-radius:10px;">
		<div style="background:#fff; min-height:400px; padding:20px 50px;">
			<div style="padding:0px 35px;  margin:20px auto; background:#eee; height:100px; font-size:18px; line-height:100px; border-radius:5px; border:1px solid #eee; -webkit-border-radius:5px;"><h1 style="padding:0px; margin:0px; font-weight:light; font-family:arial;">Velkommen!</h1></div>
			<div style="margin:35px 15px; min-height:100px; font-size:15px;">
				<p>Vi håber du vil nyde din oplevelse, sammenholdet og fællesskabet! <br/> Tak fordi du benytter dig af logo.</p>
			</div>
			<div style="width:80%; padding:15px; font-size:14px; margin:30px 30px; border-radius:5px; background:#f9f9f9; border:1px solid #eee; -webkit-border-radius:5px;">
				<p>Bekræft din konto gennem dette link:<br/></p>
				<a style="padding:10px 20px; color:#000; text-decoration:underline;"  href="localhost/template/platform/mine-indstillinger?id='. encrypt($sendEmailTo) .'" target="_blank" rel="nofollow">www.domæne.com</a>
			</div>
		</div>

		<div style="height:100px; font-size:12px; padding:30px 20px; text-align:center;">
			Logo 2017 &copy; | <a style="color:#000; text-decoration:underline;" href="domæne.com" target="_blank">www.domæne.com</a> 
		</div>
	</div>

</body>
</html>

	';

	$mail->AltBody = 'You must use a HTML mail client like Gmail for activating your account';

	if($mail->send()) {
	    urlLocation("bekraeft");
	}



?>