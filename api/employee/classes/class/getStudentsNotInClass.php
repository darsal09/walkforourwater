<?php
/*
	This file receives a classID.
	returns an array of the students in our system that are not in that class
*/

include( '../../../bootstrap.php' );

$mP = sanitize::filterInputs( 'GET', array( 'first' => FILTER_SANITIZE_STRING, 'last' => FILTER_SANITIZE_STRING, 'classID' => FILTER_SANITIZE_NUMBER_INT ) );

if( $mP[ 'classID' ] < 1 ) //the id provided is not acceptable in the database
	return print_r( json_encode( array( 'success' => false, 'message' => 'The class you provided does not exist in the system' ) ) );

if( empty( $mP[ 'last' ] ) )
	$result = classSearch::byFirst( array( ':first' => '%'.$mP[ 'first' ].'%', ':cID' => $mP[ 'classID' ] ) );
else
	$result = classSearch::byName( array( ':first' => '%'.$mP[ 'first' ].'%', ':last' => '%'.$mP[ 'last' ].'%', ':cID' => $mP[ 'classID' ] ) );

return print_r( json_encode( array( 'success' => true, 'message' => 'The information was collected', 'results' => $result ) ) );

?>