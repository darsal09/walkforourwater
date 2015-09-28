<?php
include( '../bootstrap.php' );

$email = sanitize::sani(  $_POST[ 'email' ], 'STRING' );


$user = new users( [ 'email' => $email ]);

print_r( json_encode( $user->exist() ));

?>