<?php
	include( '../index.php' );
	
	$result = registrations::getNew();
	
	if( !$result[ 'success' ]){
		echo $result[ 'message' ].PHP_EOL;
		exit;
	}
		
	$registrations = $result[ 'result' ];
	
		if( empty( $registrations ) ){
			echo 'There are no emails to sent';
			exit;
		}
	foreach( $registrations AS $registration ){	
		$name = $registration[ 'first' ];
		$email = $registration[ 'email' ];
		$subject = 'Walk For Our Water Registration';
			
		
		$headers = 'From: Walk For Our Water < info@walkforourwater.org >' . "\r\n" .
				"To: $name < $email >"."\r\n" .
				'Reply-To: info@walkforourwater.org' . "\r\n" .
				'X-Mailer: PHP/' . phpversion()."\r\n".
				'MIME-Version: 1.0'."\r\n".
				'Content-type: text/html; charset=iso-8859-1' ."\r\n";

		$registration[ 'startTime' ] = '10am';
		
		$message = emailMessages::newRegistration( $registration );
		
		$emailLayout = emailTemplates::header().emailTemplates::body( $message ).emailTemplates::footer();
		
		if( mail( $email, $subject, $emailLayout, $headers ) ){
			$result = registrationsEmailsTable::newSent( $registration );
			print_r( $registration );
			echo 'email sent'.PHP_EOL;
		}else{
			echo 'Could not send email'.PHP_EOL;
			print_r( $registration );
		}
	}
?>