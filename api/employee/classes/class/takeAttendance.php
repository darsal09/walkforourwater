<?php
include( '../../../bootstrap.php' );

$mP = sanitize::filterInputs( 'POST', array( 'studentID' => FILTER_SANITIZE_NUMBER_INT, 
											'classID' => FILTER_SANITIZE_NUMBER_INT,
											'date' => FILTER_SANITIZE_STRING ) );
											
$ca = new classAttendance( $mP );

if( !$ca->save() )
	return print_r( json_encode( array( 'status' => false, 'message' => 'Could not take attendance' ) ) );

return print_r( json_encode( array( 'status' => true, 'message' => 'Attendance taken' ) ) );
?>