<?php
include( 'index.php' );

$c = new ContactUs( [ 'name' => 'Darwin Salgado', 
					'phone' => '646-724-3923', 
					'email' => 'darsal09@yahoo.com', 
					'subject' => 'testing contact us', 
					'message' => 'I am testing to make suere that it works' ]);

$c->save();

print_r( $c );
?>