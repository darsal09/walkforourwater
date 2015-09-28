<?php
/*
	This file helps to remove a child from a class
	
	If the class has not started then we just remove the child and remove the payment
	
	If the class has started then we don't remove the kid, but just change the end date to the current date and the status to dropped
*/

include( '../../../../../bootstrap.php' );

if( !user::isEmployee() && !user::isAdmin() )
	return print_r( json_encode( array( 'success' => false, 'message' => 'You do not have right level to remove a student' ) ) );
	
$mP = sanitize::filterInputs( 'POST', array( 'classID' => FILTER_SANITIZE_NUMBER_INT, 
												'studentID' => FILTER_SANITIZE_NUMBER_INT ) );
												
$class = classModel::get( array( ':cID' => $mP[ 'classID' ] ) );

$sdate = strtotime( $class[ 'start_date' ] );
$edate = strtotime( $class[ 'end_date' ] );

$cdate = strtotime( date( 'Y-m-d' ) );

$result = classModel::dropParticipant( array( ':cID' => $mP[ 'classID' ], ':sID' => $mP[ 'studentID' ] ) );

if( $sdate > $cdate ) //if the class has not started then just remove the kid from class and remove payment
{	

}
	
if( $result < 1 )
	return print_r( json_encode( array( 'succes' => false, 'message' => 'We could not remove student from class' ) ) );
		
return print_r( json_encode( array( 'success' => true, 'message' => 'We remove student from the class' ) ) );

?>