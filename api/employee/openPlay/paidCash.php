<?php
include( '../../bootstrap.php' );

$Req = array( 'studentID' => true, 'openPlayStudent' => true, 'amount' => true, 'type' => true );

$mP = sanitize::filterInputs( 'POST', array( 'studentID' => FILTER_SANITIZE_NUMBER_INT, 
												'openPlayStudentID' => FILTER_SANITIZE_NUMBER_INT, 
												'type' => FILTER_SANITIZE_STRING,
												'amount' => array( 'filter' => FILTER_SANITIZE_NUMBER_FLOAT, 'flag' => FILTER_FLAG_ALLOW_FRACTION ) ) );
//return print_r( $mP );												
$Errors = sanitize::hasErrors( $mP, $Req, array() );

if( is_array( $Errors ) && in_array( true, $Errors ) )
	return print_r( json_encode( array( 'id' => 0, 'message' => 'There are erorors in the information you sent', 'errors' => $Errors ) ) );
	
$payment = new paymentCash( $mP );

$result  = $payment->save();

if( is_array( $result ) && isset( $result[ 'id' ] )  && $result[ 'id' ] > 0 )
{
	$package  = new openPlayPackage( array( 'id' => $mP[ 'openPlayStudentID' ] ) );
	
	if( $package->updateStatus() )
		return print_r( json_encode( array( 'id' => $result[ 'id' ], 'message' => 'payment was saved' ) ) );
	else
		return print_r( json_encode( array( 'id' => $result[ 'id' ], 'message' => 'payment was saved but we could not update the open play student' ) ) );
}

return print_r( json_encode( $result ) );
?>