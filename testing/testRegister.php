<?php
include( 'index.php' );


$zero = 0;

$r = new Register( array(
	'userID' => 1,
	'type' => 'Regular',
	'phone' => '646-724-3923',
	'cost' => 0.00,
) );

$result = $r->add();
echo 'Adding results: <br/>';
print_r( $result );
/*
$result = $r->update();
print_r( $r );
echo '<p>Update results:</p>';
print_r( $result  );

$result =	$r->delete();
echo '<p>Delete results: </p>';
print_r( $result );
*/
?>