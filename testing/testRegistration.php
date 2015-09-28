<?php
include( 'index.php' );

$u = new Users([
	'first' => 'Darwin',
	'last' => 'Salgado',
	'email' => 'darsal09@yahoo.com',
	'password' => 'soccer09',
	'type' => 'IT',
	'status' => 'Active'
]);
$result = $u->save();
print_r( $result );
$a = new Address([
				'userID' 	=> $u->getID(),
				'address' 	=> '74 Linden Street',
				'city'		=> 'Brooklyn',
				'zip' 		=> '11221',
				'state' 	=> 'NY',
				'country' 	=> 'USA',
]);
$result = $a->save();
print_r( $result );
$r = new Register([
	'userID' => $u->getID(),
	'type' => 'Walking',
	'email' => 'darsal09@yahoo.com',
	'phone' => '646-724-3923',
	'cost' => 15.00,
	]);
$result = $r->save();
print_r( $result );

?>