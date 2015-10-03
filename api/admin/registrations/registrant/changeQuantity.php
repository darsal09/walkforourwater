<?php
	include( 'index.php' );

    if( !session::isAdmin()){
        return print_r( json_encode( [ 'success' => false, 'message' => 'You do not have access']));
    }

	$data = sanitize::filterInputs( 'POST', [
												'register_id' => FILTER_SANITIZE_NUMBER_INT,
                                                'user_id' => FILTER_SANITIZE_NUMBER_INT,
                                                'quantity' => FILTER_SANITIZE_NUMBER_INT,
	                                ] );

    $results = registrationsTable::changeQuantity( [
                                                'registerID' => $data['register_id' ],
                                                'quantity' => $data[ 'quantity' ],
                                                ] );

    $result = [ 'success' =>  true, 'message'  => 'Quantity of attendees changed'];
    if( !$results[ 'success']){
        $result = [ 'success' => false, 'message' => 'Cannot change quantity in the system'];
    }
    return print_r( json_encode( $result ) );