<?php
	include( '../../bootstrap.php' );
	
	if( !session::isAdmin()){
		return print_r( json_encode( [ 'success' => false, 'message' => 'Access denied!'] ) ) ;
	}
		
	$results = contactUsTable::getMessages();
	return print_r( json_encode( [ 'data' => $results[ 'result' ] ]) );

?>