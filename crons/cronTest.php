<?php
$to      = 'darsal09@yahoo.com';
$subject = 'the subject';
$message = '<p>I am testing to see if html works.</p><p> Here is a link <a href="http://walkforourwater.org">hello</a></p>';
//	$headers  = "From: Walk For Our Water < info@walkforourwater.org >".PHP_EOL;
//	$headers .= "To: $name < $email > ".PHP_EOL;
$name = 'Darwin';
$email = $to;
$headers = 'From: Walk For Our Water < info@walkforourwater.org >' . "\r\n" .
			"To: $name < $email >"."\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion()."\r\n".
	'MIME-Version: 1.0'."\r\n".
	'Content-type: text/html; charset=iso-8859-1' ."\r\n";

mail($to, $subject, $message, $headers);
?>
