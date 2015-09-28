<?php
include( '../../../bootstrap.php' );

$Req = array( 'date' => true, 'studentID' => true, 'classID' => true );

$mP = sanitize::filterInputs( 'POST', array( 'date' => FILTER_SANITIZE_STRING,
											'classID' => FILTER_SANITIZE_NUMBER_INT ) );

$mP[ 'date' ] = date( 'Y-m-d', strtotime( $mP[ 'date' ] ) );

$students = array();

if( isset( $_POST[ 'attendance' ] ) )
	$students = $_POST[ 'attendance' ];

$Errors = array();
$Success = array();
	
foreach( $students AS $studentID )
{
	$mP[ 'studentID' ] = sanitize::sani( $studentID, 'INTIGER' );
	
	$Error = sanitize::hasErrors( $mP, $Req, array() );
	
	if( is_array( $Error ) && in_array( true, $Error ) )
		$Errors[] = $Error;
	else
	{
		$ca = new classAttendance( $mP );

		if( !$ca->exist() )
			if( !$ca->add() )		
				$Errors[] = array_merge( array(  'message' => 'Could not take attendance for the following information' ), $mP );
			else
				$Success[] = $mP;
			
	}	
}

if( !empty( $Errors ) )
	return print_r( json_encode( array( 'success' => false, 'message' => 'There are Errors in the information you inputted', 'errors' => $Errors ) ) );
else
	return print_r( json_encode( array( 'success' => true, 'message' => 'Attendance taken', 'taken' => $Success ) ) );
?>