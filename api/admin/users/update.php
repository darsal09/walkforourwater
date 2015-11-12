<?php
	include( '../../bootstrap.php' );

	$data = sanitize::filterInputs( 'POST', [
											'id'	=>  FILTER_SANITIZE_NUMBER_INT,
											'first' => FILTER_SANITIZE_STRING,
											'last' => FILTER_SANITIZE_STRING,
											'email' => FILTER_SANITIZE_EMAIL,
											'status' => FILTER_SANITIZE_STRING,
								]);
    print_r( $data );
	$user = new users( $data );
	
	$result = $user->update();
	
	return print_r( json_encode( $result ) );
