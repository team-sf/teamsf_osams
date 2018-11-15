<?php
	date_default_timezone_set('Asia/Manila');
	require 'PHPMailerAutoload.php';
	
	fnMailer("jeric.matthew.24@gmail.com", "Hi", "Hello");
	function fnMailer($addAddress, $subject, $body) {
		$mail = new PHPMailer;
		
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->isHTML(true);
		
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		
		$mail->Username = "bsit4b.2018.group2@gmail.com";
		$mail->Password = "TeamJ2018";
		$mail->setFrom('bsit4b.2018.group2@gmail.com', 'Erwin\'s Sisigan & Ningnangan');
		
		$mail->SMTPOptions = array (
		'ssl' => array(
			'verify_peer'  => false,
			'verify_depth' => false,
			'allow_self_signed' => true,
			'peer_name' => 'smtp.gmail.com',
			'cafile' => '/etc/ssl/ca_cert.pem',
			)
		);
		
		$mail->addAddress($addAddress, 'Yansam RTW');
		$mail->Subject = $subject;
		$mail->Body = $body;

		if (!$mail->send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Message sent!";
		}
	}
?>