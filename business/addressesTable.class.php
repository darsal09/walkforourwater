<?php
/**
 * Created by PhpStorm.
 * User: darsal
 * Date: 9/23/15
 * Time: 7:53 PM
 */

class addressesTable {
    private function __construct(){

    }

    public static function add( $data ){
        $sql = 'INSERT INTO
                address( address, city, state, zip, country, user_id )
                VALUES( :address, :city, :state, :zip, :country, :userID )';

        return databaseHandler::Execute( $sql, [ ':address' => $data[ 'address'],
                                                ':city' => $data[ 'city'],
                                                ':state' => $data[ 'state'],
                                                ':zip' => $data[ 'zip'],
                                                ':country' => $data[ 'country'],
                                                ':userID' => $data[ 'userID' ],
            ] );
    }
}