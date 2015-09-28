<?php
include( 'index.php' );
$p = new PayPal( [
	'receiptID' => 1,
	'amount' => 1,
	'type' => 'Donation',
]);

$p->send();
?>