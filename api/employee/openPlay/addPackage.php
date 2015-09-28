<?php
include( '../../bootstrap.php' );

$Req = array( 'id' => true, 'student_id' => true, 'openplay_id' => false, 'price' => true, 'amount' => true, 'startDate' => false );

$mP = sanitize::filterInputs( 'POST', array( 'id' => FILTER_SANITIZE_NUMBER_INT, 
												'student_id' => FILTER_SANITIZE_NUMBER_INT,
												'openplay_id' => FILTER_SANITIZE_NUMBER_INT,
												'price' => array( 'filter' => FILTER_SANITIZE_NUMBER_FLOAT, 'flag' => FILTER_FLAG_ALLOW_FRACTION ),
												'amount' => FILTER_SANITIZE_NUMBER_INT,
												'startDate' => FILTER_SANITIZE_STRING ) );
												
$mP[ 'startDate' ] = date( 'Y-m-d', strtotime( $mP[ 'startDate' ] ) );

//return print_r( json_encode( $mP ) );
												
$Errors = sanitize::hasErrors( $mP, $Req, array() );

if( is_array( $Errors ) && in_array( true, $Errors ) )
	return print_r( json_encode( $Errors ) );
	

$package = new openPlayPackage( array( 'packageID' => $mP[ 'id' ], 'studentID' => $mP['student_id' ], 'openPlayID' => $mP[ 'openplay_id' ], 'amount' => $mP[ 'amount' ], 'price' => $mP[ 'price' ], 'status' => 'Pending', 'startDate' => $mP[ 'startDate' ] ) );

if( $package->hasErrors() )
	return print_r( json_encode( $package->getErrors() ) );

$result = $package->addToStudent();

if( $result < 1 )
	return print_r( json_encode( array( 'id' => 0, 'message' => 'We coult not add package to student' ) ) );

$package = openPlayStudentsModel::getPackage( array( ':id' => $result ) );
$package[ 'start' ]  = helper::getDateWithoutDay( $package[ 'start' ] );
$package[ 'end' ] = helper::getDateWithoutDay( $package[ 'end' ] );

return print_r( json_encode( array( 'id' => $result, 'price' => $mP[ 'price' ], 'amount' => $mP[ 'amount' ], 'package' => $package, 'message' => 'package added to the student' ) ) );

?>