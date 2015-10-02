<?php
	include( '../../bootstrap.php' );
	
	if( !session::isAdmin()){
		return print_r( json_encode( [ 'success' => false, 'message' => 'Access denied!'] ) ) ;
	}

    $data = sanitize::filterInputs( 'POST', [
                                                'status' => FILTER_SANITIZE_STRING,
                                                'registration_email' => FILTER_SANITIZE_STRING,
                                                'valid_email' => FILTER_SANITIZE_STRING

                                            ] );

    $result = registrationsTable::getAll( $data );

    if(!$result[ 'success' ]){
        $result[ 'result' ] = [];
    }

	return print_r( json_encode( [ 'data' => $result[ 'result'] ]) );
