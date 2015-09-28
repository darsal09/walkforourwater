<?php
include( '../../bootstrap.php' );
	$Req = array( 'id' => true );

	$mP = sanitize::filterInputs( 'POST', array( 'id' => FILTER_SANITIZE_NUMBER_INT ) );
	
	$Errors = sanitize::hasErrors( $mP, $Req, array() );
	
	if( is_array( $Errors ) && in_array( true, $Errors ) )
		return print_r( json_encode( $Errors ) );
		
	$package = new openPlayStudent( array( 'id' => $mP[ 'id' ] ) );
		
	if( $package->remove() )
		return print_r( json_encode( array( 'id' => $mP[ 'id' ], 'message' => 'Sessions removed' ) ) );
	
	
	return print_r( json_encode( array( 'id' => 0, 'message' => 'Could not delete the sessions' ) ) );
?>