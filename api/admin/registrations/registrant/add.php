<?php
/**
 * Created by PhpStorm.
 * User: darsal
 * Date: 9/23/15
 * Time: 5:47 PM
 */
include('../../../bootstrap.php');

if (!session::isAdmin()) {
    return print_r(json_encode(['success' => false, 'message' => 'Access denied!']));
}


try {
    $data = sanitize::filterInputs('POST', [
        'status' => FILTER_SANITIZE_STRING,
        'options' => FILTER_SANITIZE_STRING,
        'first' => FILTER_SANITIZE_STRING,
        'last' => FILTER_SANITIZE_STRING,
        'address' => FILTER_SANITIZE_STRING,
        'city' => FILTER_SANITIZE_STRING,
        'state' => FILTER_SANITIZE_STRING,
        'zip' => FILTER_SANITIZE_STRING,
        'email' => FILTER_SANITIZE_STRING,
        'phone' => FILTER_SANITIZE_STRING,
        'donation' => FILTER_SANITIZE_STRING
    ]);


    $user = new users([
        'first' => $data['first'],
        'last' => $data['last'],
        'email' => $data['email'],
        'type' => 'Regular',
        'status' => 'Active',
    ]);

    $result = $user->add();

    if (!$result['success'] && $user->getID() < 1) {
        throw new Exception( $result[ 'message' ] );
    }

    if ($result['action'] == 'new') {
        $address = new Address([
            'userID' => $user->getID(),
            'address' => $data['address'],
            'city' => $data['city'],
            'zip' => $data['zip'],
            'state' => $data['state'],
            'country' => 'USA',
        ]);

        $result = $address->add();
    }


    $register = new Register([
        'userID' => $user->getID(),
        'phone' => $data['phone'],
        'type' => $data['options'],
        'cost' => $data['donation'],
        'status' => 'Completed',
        'eventID' => 1,
    ]);

    return print_r( json_encode( $register->save() ) );
}catch( Exception $e ){
    return print_r( json_encode([ 'success' => false, 'message' => $e->getMessage() ] ) );
}