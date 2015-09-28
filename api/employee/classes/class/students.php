<?php
include( '../../../bootstrap.php' );

$mP = sanitize::filterInputs( 'GET', array( 'class_id' => FILTER_SANITIZE_NUMBER_INT ) );

$students = classModel::getStudents( array( ':cID' => $mP[ 'class_id' ] ) );

print_r( json_encode( $students ) );
?>