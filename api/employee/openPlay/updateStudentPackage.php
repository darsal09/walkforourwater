<?php
include( '../../bootstrap.php' );

$Req = array( 'student_id' => false, 'id' => true );

$mP = sanitize::filterInputs( 'POST', array( 'student_id' => FILTER_SANITIZE_NUMBER_INT, 
											'id' => FILTER_SANITIZE_NUMBER_INT ) );

$Errors = sanitize::hasErrors( $mP, $Req, array() );

if( is_array( $Errors ) && in_array( true, $Errors ) )
	return print_r( json_encode( $Errors ) );
	
$package = new openPlayPackage( $mP );
	
if( $package->updateStatus() )
	return print_r( json_encode( array( 'success' => true, 'message' => 'Student Package was updated succesfully' ) ) );
	
return print_r( json_encode( array( 'success' => false, 'message' => 'Coudl not update the student open play package' ) ) );
?>