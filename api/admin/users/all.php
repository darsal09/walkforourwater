<?php
	include( '../../bootstrap.php' );
	
	if( !session::isAdmin() ){
		return print_r( json_encode( [
								'success' => false,
								'message'  => 'you do not have access to this to view users from this website',
		]));
	}

	$users = new users();
    $result = $users->getAll();
	return print_r( json_encode( [ 'data' => $result['result'] ]) );