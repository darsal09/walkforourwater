<?php
include( 'index.php' );

$a = new Address([
				'userID' 	=> 2,
				'address' 	=> '74 Linden Street',
				'city'		=> 'Brooklyn',
				'zip' 		=> '11221',
				'state' 	=> 'NY',
				'country' 	=> 'USA',
			]);
			
$result = $a->add();

print_r( $result );

print_r( $a );
?>