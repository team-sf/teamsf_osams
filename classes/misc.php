<?php

require '../PHPMailer/PHPMailerAutoload.php';

class Misc
{
	public function generateActivation()
	{
		$nums = str_shuffle("1234567890");
		$random = substr($nums, 0, 6);

		return $random;
	}

	public function sendActivation($id, $code)
	{
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
        $mail->setFrom('bsit4b.2018.group2@gmail.com', 'Activation Link');

        $mail->SMTPOptions = array (
            'ssl' => array(
                'verify_peer'  => false,
                'verify_depth' => false,
                'allow_self_signed' => true,
                'peer_name' => 'smtp.gmail.com',
                'cafile' => '/etc/ssl/ca_cert.pem',
            )
        );

        $mail->addAddress($txtemail, 'Erwin');
        $mail->Subject = 'Email Activation';
        $mail->Body = "We are so glad you signed up for an account with us. Please click <a href=\"http://localhost/nifty/v2.9/reservation/email-activation.php?id=$id\">here</a> to validate your email address.";

        if (!$mail->send()) {
            print '2';
        } else {
            print '1';
            //sending SMS
            $username = "jayveequiambao2018@yahoo.com";
            $hash = "7937d54191d35c037a10ecbe5dc8da3810bef1f09caaa8409f0860843a7029a0";
            //$username = "bsit4b.2018.group2@gmail.com";
            //$hash = "cc8dabdb4b72d41b709e229db154f7624fcc7f9bc38996708302e3bb04b03387";
            $test = "0";

            // Data for text message. This is the text message data.
            $sender = "Unionbank's OSAMS"; // This is who the message appears to be from.
            $numbers = "63".$txtcontact; // A single number or a comma-seperated list of numbers
            $message = "Thank you for choosing UnionBank. Your verification code is $code. \n\n - Unionbank";
            // 612 chars or less
            // A single number or a comma-seperated list of numbers
            $message = urlencode($message);
            $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
            $ch = curl_init('http://api.txtlocal.com/send/?');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch); // This is the result from the API
            curl_close($ch);
        }
    }
    public function dstring($result)
    {
        if($result->num_rows > 0)
        {
            while($fetch = $result->fetch_assoc())
            {
                $res[] = $fetch;
            }
            return $res;
        }
        else
        {
            return 0;
        }
    }
}
