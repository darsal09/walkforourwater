<?php
	include( '../index.php' );
	
	$registration = registrations::getIncomplete();
	
	$name = $registration[ 'first' ];
	$email = $registration[ 'email' ];
	$subject = 'Walk For Our Water Registration';
	
//	$template = emailTemplates::getIncompleteRegistrations( $registrations[ 'first' ] );
	
	$headers = 'From: Walk For Our Water < info@walkforourwater.org >' . "\r\n" .
		"To: $name < $email >"."\r\n" .
		'Reply-To: info@walkforourwater.org' . "\r\n" .
		'X-Mailer: PHP/' . phpversion()."\r\n".
		'MIME-Version: 1.0'."\r\n".
		'Content-type: text/html; charset=iso-8859-1' ."\r\n";


	$registration[ 'startTime' ] = '10am';

		
	$message = emailMessages::incompleteRegistration( $registration );
	
	$emailLayout = emailTemplates::header().emailTemplates::body( $message ).emailTemplates::footer();
	
	
	echo $emailLayout;
	exit;
	
	if( mail( $email, $subject, $emailLayout, $headers ) ){
		$result = registrationsEmailsTable::IncompleteSent( $registration );
		print_r( $registration );
		echo 'email sent';
	}else{
		echo 'Could not send email';
	}
?>