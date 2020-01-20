<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['message'];


	$email_form = 'iitianpreetam@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";

	$to = "iitianpreetam@gmail.com";
	$headers = "Form: #email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	mail($to, $email_subject, $email_body,$headers);
	header("Location: index.html");




?>