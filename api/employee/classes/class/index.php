<?php
	include( '../../../bootstrap.php' );
	
	$id = sanitize::sani( $_GET[ 'id' ], 'INTIGER' );
	
	$class = classModel::get( array( ':cID' => $id ) );
	
	return print_r( $class );
?>