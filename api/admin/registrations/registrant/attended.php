<?php
	include( 'index.php' );

    if( !session::isAdmin()){
        return print_r( json_encode( [ 'success' => false, 'message' => 'You do not have access']));
    }

	$data = sanitize::filterInputs( 'POST', [
												'register_id' => FILTER_SANITIZE_NUMBER_INT,
                                                'user_id' => FILTER_SANITIZE_NUMBER_INT
	                                ] );

    $results = registrationsTable::attended( [ 'registerID' => $data['register_id' ] ] );

    $result = [ 'success' =>  true, 'message'  => 'Attendance added to the system'];
    if( !$results[ 'success']){
        $result = [ 'success' => false, 'message' => 'Cannot add attendance to the system'];
    }
    return print_r( json_encode( $result ) );