<?php
	include( 'index.php' );

    if( !session::isAdmin()){
        return print_r( json_encode( [ 'success' => false, 'message' => 'You do not have access']));
    }

	$data = sanitize::filterInputs( 'POST', [
												'register_id' => FILTER_SANITIZE_NUMBER_INT,
                                                'user_id' => FILTER_SANITIZE_NUMBER_INT
	                                ] );

    $results = registrationsTable::updateStatus([ 'status' => 'Completed',
                                                'registerID' => $data['register_id']]);
    $result = [ 'success' =>  true, 'message'  => 'Registration updated'];
    if( !$results[ 'success']){
        $result = [ 'success' => false, 'message' => 'Cannot update registration'];
    }
    return print_r( json_encode( $result ) );