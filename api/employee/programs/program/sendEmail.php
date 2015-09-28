<?php
include( '../../../bootstrap.php');

$mP = sanitize::filterInputs( 'POST', array( 'title' => FILTER_SANITIZE_STRING,
											'message' => FILTER_SANITIZE_STRING ));
											
											
$programs = $_POST[ 'tgp_program' ];

if( sizeof ( $programs ) < 1 ){
	return print_r( json_encode( array( 'success' => false, 'error' => false, 'message' => 'You did not select any programs') ));
}


return print_r( json_encode( array( 'success' => true, 'input' => $mP, 'message' => 'Your emails were sent to following information' ) ) );
?>