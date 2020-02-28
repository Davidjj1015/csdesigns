<?php

	$userName		=  $_POST['name'];
	$userEmail		=  $_POST['email'];
	$userNumber		=  $_POST['number'];
	$userSubject	=  $_POST['subject'];
	$userDate		=  $_POST['date'];
	$userMessage	=  $_POST['message'];
	echo "==============================<br />";
	echo "Thank you for your message, I will be in touch very soon!";

	$to 			= "info@carinasnyman.co.za";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";

	$body .= "\r\n Customer name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Contact Number:" . $userNumber;
	$body .= "\r\n Subject:" . $userSubject;
	$body .= "\r\n Wedding date:" . $userDate;
	$body .= "\r\n Message:" . $userMessage;

	mail($to, $subject, $body);
?>
