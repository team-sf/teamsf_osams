<?php
	function fnEmail($addAddress, $subject, $body){
		require("PHPMailerAutoload.php");

		$mail = new PHPMailer;

		$mail->isSMTP();                                      		  // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  							  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               		  // Enable SMTP authentication
		$mail->Username = 'qwertyijps@gmail.com';                 	  // SMTP username
		$mail->Password = 'IanJasper@16';                             // SMTP password
		$mail->SMTPSecure = 'tls';                            		  // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    		  // TCP port to connect to

		$mail->From = 'qwertyijps@gmail.com';
		$mail->FromName = 'Yvanas Fashion';
		$mail->addAddress($addAddress);               				  // Name is optional

		$mail->isHTML(true);                                  		  // Set email format to HTML

		$mail->Subject = $subject;
		$mail->Body = $body;

		$mail->send();
	}
?>