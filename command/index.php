<?php
include( 'bootstrap.php' );

//$cc = new createClass( array( 'name' => 'member', 'members' => array( 'name', 'email' ) ) );
//$cc->writeClass();

$name = filter_input( INPUT_GET, 'name', FILTER_SANITIZE_STRING );

$members = $_GET[ 'members' ];

$cc = new createClass( array( 'name' => $name, 'members' => $members ) );
//print_r( $cc );
$cc->writeClass();

?>