<?php
include( '../../../bootstrap.php' );

$mP = sanitize::filterInputs( 'POST', array(
											'id' => FILTER_SANITIZE_NUMBER_INT,
											'first' => FILTER_SANITIZE_STRING,
											'last' => FILTER_SANITIZE_STRING,
											'phone' => FILTER_SANITIZE_STRING,
											'email' => FILTER_VALIDATE_EMAIL,
											'city' => FILTER_SANITIZE_STRING,
											'zip' => FILTER_SANITIZE_STRING,
											'status' => FILTER_SANITIZE_STRING,
					));
					

return print_r( json_encode( $mP ) );
?>