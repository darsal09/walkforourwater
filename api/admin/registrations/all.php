<?php
	include( '../../bootstrap.php' );
	
	if( !session::isAdmin()){
		return print_r( json_encode( [ 'success' => false, 'message' => 'Access denied!'] ) ) ;
	}

    $result = registrationsTable::getAll();
		
	return print_r( json_encode( [ 'data' => $result[ 'result'] ]) );
?>