<?php
	$to = "youremail@gmail.com";
	$from = 'email';
	$name = 'name';
	$headers = "From: $from";
	$subject = "You have a message.";

	$fields = array();
	$fields{"name"} = "Your Name";
	$fields{"email"} = "Your Email";
	$fields{"phonenumber"} = "Phone";
	$fields{"address"} = "Address";
	$fields{"services"} = "Services";
	$fields{"datavisit"} = "Date of visit";
	$fields{"timevisit"} = "Time of visit";
	$body = "Here is what was sent Plumbio, form 'Schedule Service Online':\n\n";
	foreach($fields as $a => $b){
		$body .= sprintf("%20s:%s\n",$b,$_REQUEST[$a]);
	}
	$send = mail($to, $subject, $body, $headers);

?>
