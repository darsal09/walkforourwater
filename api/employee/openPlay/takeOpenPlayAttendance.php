<?php
include( '../../bootstrap.php' );
	
	$Req = array( 'openPlayID' => false, 'studentID' => true, 'classID' => false, 'packageID' => true, 'openPlayStudentID' => true, 'date' => true );
	
	$rID = sanitize::sani( $_POST[ 'openPlayStudentID' ], 'INTIGER' );
	
	$packageID = openPlayStudentsModel::getPackageID( array( ':id' => $rID ) );
	
	$mP = sanitize::filterInputs( 'POST', array( 'studentID' => FILTER_SANITIZE_NUMBER_INT, 
												'openPlayStudentID' => FILTER_SANITIZE_NUMBER_INT,
												'date' => FILTER_SANITIZE_STRING ) );
	
	$mP[ 'packageID' ] = $packageID;
	
	$op = openPlayModel::getCurrent();
	
	if( !empty( $op ) )
	{
		$mP[ 'openPlayID' ] = $op[ 'openplayID' ];
		
		$session = openPlayModel::getCurrentSession( array( ':opID' => $op[ 'openplayID' ] ) );
		$mP[ 'classID' ] = $session[ 'class_id' ];
	}
	
	$mP[ 'date' ] = date( 'Y-m-d', strtotime( $mP[ 'date' ] ) );
	
	
	$Errors = sanitize::hasErrors( $mP, $Req, array() );
	
	if( is_array( $Errors ) && in_array( true, $Errors ) )
		return print_r( json_encode( array( 'status' => 'error', 'error' => true, 'message' => 'There are errors in the information you provided', 'errors' => $Errors ) ) );
	
	$opa = new openPlayAttendance( $mP );
	
	$result = $opa->save();
	
	return print_r( $result );
?>