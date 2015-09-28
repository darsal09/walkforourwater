<?php
include( '../../../bootstrap.php' );

$Req = array( 'id' => true, 'name' => true, 'homePhone' => false, 'workPhone' => false, 'cellPhone' => false, 'email' => true );

$mP = sanitize::filterInputs( 'POST', array( 'id' => FILTER_SANITIZE_NUMBER_INT,
											'name' => FILTER_SANITIZE_STRING,
											'homePhone'	=> FILTER_SANITIZE_STRING,
											'workPhone' => FILTER_SANITIZE_STRING,
											'cellPhone' => FILTER_SANITIZE_STRING,
											'email' => FILTER_SANITIZE_EMAIL ) );
											
$Errors = sanitize::hasErrors( $mP, $Req, array() );

if( in_array( true, $Errors ) )
	return json_encode( $mP );
	
$
?>