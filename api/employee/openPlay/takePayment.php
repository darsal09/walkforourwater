<?php
include( '../../bootstrap.php' );

$Req = array( 'openPlayStudentID' => true, 
				'studentID' => true,
				'price' => true, 
				'discount' => false, 
				'total_due' => true, 
				'total_payment' => true, 
				'payment_type' => true,
				'receipt' => true, 
				'note' => false, 
				'reason_code' => false );
				
	$mP = sanitize::filterInputs( 'POST', array( 'openPlayStudentID' => FILTER_SANITIZE_NUMBER_INT, 
													'studentID' => FILTER_SANITIZE_NUMBER_INT,
													'price' => array( 'filter' => FILTER_SANITIZE_NUMBER_FLOAT, 'flag' => FILTER_FLAG_ALLOW_FRACTION ), 
													'discount' => array( 'filter' => FILTER_SANITIZE_NUMBER_FLOAT, 'flag' => FILTER_FLAG_ALLOW_FRACTION ), 
													'totalDue' => array( 'filter' => FILTER_SANITIZE_NUMBER_FLOAT, 'flag' => FILTER_FLAG_ALLOW_FRACTION ), 
													'totalPayment' => array( 'filter' => FILTER_SANITIZE_NUMBER_FLOAT, 'flag' => FILTER_FLAG_ALLOW_FRACTION ), 
													'type' => FILTER_SANITIZE_STRING, //payment type
													'receipt' => FILTER_SANITIZE_STRING, 
													'note' => FILTER_SANITIZE_STRING, 
													'reasonCode' => FILTER_SANITIZE_STRING) );
	$mP[ 'registrationType' ] = 'Open Play';
	
	
	$Errors = sanitize::hasErrors( $mP, $Req, array() );
	
	if( is_array( $Errors ) && in_array( true, $Errors ) )
		return print_r( json_encode( array( 'payment' => false, 'error' => true, 'message' => 'There errors in the information you sent', 'errors' => $Errors )  ) );
		
	$payment = new paymentGymPark( $mP );
	
	return print_r( json_encode( $payment->save() ) );
	
?>