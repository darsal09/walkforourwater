<?php
include( '../../../bootstrap.php' );

$Req = array( 'classID' => true, 'classPart' => true, 'startDate' => true, 'endDate' => true, 'price' => true );

$mP = sanitize::filterInputs( 'POST', array( 'classID' => FILTER_SANITIZE_STRING, 
									'classPart' => FILTER_SANITIZE_STRING,
									'startDate' => FILTER_SANITIZE_STRING,
									'endDate' => FILTER_SANITIZE_STRING,
									'price' => array( 'filter' => FILTER_SANITIZE_NUMBER_FLOAT, 'flag' => FILTER_FLAG_ALLOW_FRACTION ) ) );

$Error = sanitize::hasErrors( $mP, $Req, array() );

if( is_array( $Error ) && in_array( true, $Error ) )
	return print_r( json_encode( array( 'success' => false, 'message' => 'There are errors in the information you sent', 'errors' => $Error ) ) );

$mP[ 'startDate' ] 	= date( 'Y-m-d', strtotime( $mP[ 'startDate' ] ) );
$mP[ 'endDate' ]	= date( 'Y-m-d', strtotime( $mP[ 'endDate' ] ) );
	
$students = array();

if( isset( $_POST[ 'students' ] ) )
	$students = $_POST[ 'students' ];

if( sizeof( $students ) < 1 )
	return print_r( json_encode( array( 'success' => false, 'message' => 'You did not select any students', 'errors' => array( 'studentID' => true ) ) ) );
	
$Errors = array();
$Success = array();

foreach( $students AS $studentID )
{
	if( $studentID > 0 && student::exist( array( ':sID' => $studentID ) ) )
	{
		$input = array( ':sID' 		=> $studentID, 
						':cID' 		=> $mP[ 'classID' ], 
						':type' 	=> $mP[ 'classPart' ], 
						':sDate' 	=> $mP[ 'startDate' ], 
						':eDate' 	=> $mP[ 'endDate' ],
						':price' 	=> $mP[ 'price' ] );
		
		$result = student::addToClass( $input );
		
		if( $result > 0 )
			$Success[] = $input;
		else
			$Errors[] = $input;
	}
}

if( is_array( $Errors ) && !empty( $Errors ) )
	return print_r( json_encode( array( 'success' => false, 'message' => 'There are errors in the system or student already exist in this class', 'errors' => $Errors ) ) );
	
return print_r( json_encode( array( 'success' => true, 'message' => 'Participants were added to the system.', 'input' => $Success ) ) );
?>