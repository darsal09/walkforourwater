<?php
	include( 'index.php' );

    if( !session::isAdmin()){
        return print_r( json_encode( [ 'success' => false, 'message' => 'You do not have access']));
    }

	$data = sanitize::filterInputs( 'POST', [
												'register_id' => FILTER_SANITIZE_NUMBER_INT,
                                                'user_id' => FILTER_SANITIZE_NUMBER_INT,
	                                ] );

    $results = registrationsTable::removeAttendance( [
                                                'registerID' => $data['register_id' ],
                                                ] );

    $result = [ 'success' =>  true, 'message'  => 'attendance removed'];
    if( !$results[ 'success']){
        $result = [ 'success' => false, 'message' => 'Cannot remove attendance in the system'];
    }
    return print_r( json_encode( $result ) );