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

	$body .= "\r\n name:" . $userName;
	$body .= "\r\n email:" . $userEmail;
	$body .= "\r\n number:" . $userNumber;
	$body .= "\r\n subject:" . $userSubject;
	$body .= "\r\n date:" . $userDate;
	$body .= "\r\n message:" . $userMessage;

	mail($to, $subject, $body);
?>
