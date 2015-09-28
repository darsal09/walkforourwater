<?php
include( '../../bootstrap.php' );

$id = sanitize::sani( $_POST[ 'id' ], 'INTIGER' );

echo openPlayModel::removeAttendance( array( ':id' => $id ) );
?>