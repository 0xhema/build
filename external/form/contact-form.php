<?php
	$to = "youremail@gmail.com";
	$from = 'email';
	$name = 'name';
	$headers = "From: $from";
	$subject = "You have a message.";

	$fields = array();
	$fields{"name"} = "Your Name";
	$fields{"email"} = "E-mail";
	$fields{"phonenumber"} = "Phone";
	$fields{"message"} = "Message";

	$body = "Here is what was sent Plumbio, form 'Contact Form':\n\n";
	foreach($fields as $a => $b){
		$body .= sprintf("%20s:%s\n",$b,$_REQUEST[$a]);
	}
	$send = mail($to, $subject, $body, $headers);

?>
