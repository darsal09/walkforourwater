<?php
/**
 * Created by PhpStorm.
 * User: darsal
 * Date: 10/02/15
 * Time: 4:43 PM
 */

include( 'index.php' );

if( !session::isAdmin() ){
    return print_r( json_encode( [ 'success' => false, 'message' => 'You do not have access' ]));
}

$data = sanitize::filterInputs( 'POST', [
    'user_id'=> FILTER_SANITIZE_NUMBER_INT,
    'register_id' => FILTER_SANITIZE_NUMBER_INT,
] );


$result = registrations::get( $data[ 'register_id' ] );

if( !$result[ 'success']){
    return print_r( json_encode( $result ) );
}
$registration = $result[ 'result' ];

if( !emails::sendUpdate( $registration ) ){
    return print_r( json_encode( [ 'success' => false, 'message' => 'Email could not be sent. Check the information provided!', 'information' => $result[ 'result' ]]) );
}


return print_r( json_encode( [ 'success' => true, 'message' => 'Email was sent to email: '.$registration[ 'email' ]] ) );
