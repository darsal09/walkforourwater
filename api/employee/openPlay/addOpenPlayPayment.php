<?php
include( '../../bootstrap.php' );
	$Req = array( 'name' => true, 'number' => true, 'expiration_date' => true, 'authorization_code' => true, 
					'street' => true, 'city' => true, 'state' => true, 'zip' => true,
					'price' => true, 'amount' => true, 'studentID' => true, 'packageID' => true, 'openPlayID' => true );
					
	$mP = sanitize::filterInputs( 'POST', array( 'type' => FILTER_SANITIZE_STRING, 
													'name' => FILTER_SANITIZE_STRING, 
													'number' => FILTER_SANITIZE_STRING, 
													'expiration_date' => FILTER_SANITIZE_STRING, 
													'authorization_code' => FILTER_SANITIZE_STRING, 
													'street' => FILTER_SANITIZE_STRING,
													'city' => FILTER_SANITIZE_STRING,
													'state' => FILTER_SANITIZE_STRING,
													'zip' => FILTER_SANITIZE_STRING,
													'price' => array( 'filter' => FILTER_SANITIZE_NUMBER_FLOAT, 'flag' => FILTER_FLAG_ALLOW_FRACTION ),
													'studentID' => FILTER_SANITIZE_NUMBER_INT,
													'packageID' => FILTER_SANITIZE_NUMBER_INT,
													'openPlayID' => FILTER_SANITIZE_NUMBER_INT,
													'amount' => FILTER_SANITIZE_NUMBER_INT ) );
													
	
	
	$errors = sanitize::hasErrors( $mP, $Req, array() );
	
	if( is_array( $errors ) && in_array( true, $errors ) )
	{
		return print_r( json_encode( $errors )  );
		exit;
	}
		
	$userID = user::getUserID( array( ':sID' => $mP[ 'studentID' ] ) );
	
	$card = new creditCard( array( ':type' => $mP[ 'type' ], ':name' => $mP[ 'name' ], ':number' => $mP[ 'number' ], ':expire' => $mP[ 'expiration_date' ], ':cardCode' => $mP[ 'authorization_code' ],
									':street' => $mP[ 'street' ], ':city' => $mP[ 'city' ], ':state' => $mP[ 'state' ], ':zip' => $mP[ 'zip' ],
									':mID' => $mP[ 'studentID' ], ':uID' => $userID ) );
									
	//save the credit card if not saved								
	$card->save();
	
	$openPlay = new openPlay( array( ':opID' => $mP[ 'openPlayID' ] ) );
	$package = new Package( array( ':pOPID' => $mP[ 'packageID' ]  ) );
	
	$payment = new openPlayPayment( array( 'creditCard' => $card, 
											'openPlay' => $openPlay, 
											'package' => $package, 
											'memberID' => $mP[ 'studentID' ], 
											'userID' => $userID ) );
	
	$result = $payment->save();
	
	//if the payment is not successfull
	if( $result < 1  )			
		return print_r( json_encode( array( 'payment' => false, 'payment_id' => 0, 'message' => 'Could not collect payment'  ) ) );
		
	return print_r( json_encode( array( 'payment' => true, 'payment_id' => $result, 'message' => 'Payment was made successfully' ) ) );
?>