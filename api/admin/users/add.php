<?php
include( '../../bootstrap.php' );

$data = sanitize::filterInputs( 'POST', [
											'first' => FILTER_SANITIZE_STRING,
											'last' => FILTER_SANITIZE_STRING,
											'email' => FILTER_SANITIZE_EMAIL,
											'status' => FILTER_SANITIZE_STRING,
								]);
								
	$user = new users( $data );
	
	$result = $user->add();
	
	return print_r( json_encode( $result ) );
?>