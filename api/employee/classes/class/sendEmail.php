<?php
include( '../../../bootstrap.php' );


$mP[ ':subject' ] = sanitize::sani( $_POST[ 'subject' ], 'STRING' );
$mP[ ':message' ] = sanitize::sani( $_POST[ 'message' ], 'STRING' );

$classes  	= $_POST[ 'tgp_class' ];

$flag = emails::sendEmailToClass( $classes, $mP );

if( $flag == 1 )
	return print_r( json_encode( array( 'success' => true, 'message' => 'Emails were sent' ) ) );
	
return print_r( json_encode( array( 'success' => false, 'message' => 'Emails were not able to be sent' ) ) );
?>