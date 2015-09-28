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

$c = new Donate( [ 
					'userID' => $u->getID(),
					'phone' => '646-724-3923',
					'status' => 0,
					'emailUpdates' => 1,
					'giftAmount' => '0.00',
					]);
					
$result = $c->add();

print_r( $result );
?>