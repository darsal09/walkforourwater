<?php
include( 'index.php' );

$c = new Donate( [ 
					'userID' => 1,
					'phone' => '646-724-3923',
					'status' => 0,
					'emailUpdates' => 1,
					'giftAmount' => '50.00',
					]);


print_r( $c->save() );
?>