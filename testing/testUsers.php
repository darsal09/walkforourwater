<?php
include( 'index.php');

$u = new users([
	'first' => 'Darwin',
	'last' => 'Salgado',
	'email' => 'salgado@yahoo.com',
	'password' => 'soccer09',
	'type' => 'IT',
	'status' => 'Active'
]);

$result = $u->add();

print_r( $result );

if( !$result[ 'success' ] && $u->getID() < 1 ){
	echo $result[ 'message' ];
	return;
}

$register = new Register( [
	'userID' => $u->getID(),
	'eventID' => 1,
	'phone' => '917.945.4720',
	'city' => 'Brooklyn',
	'zip' => '11221',
	'type' => 'Walking',
	'cost' => 1.00,
]);
$result = $register->add();

print_r( $result );
?>