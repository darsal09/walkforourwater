<?php
class registrationsTable{
	private function __construct(){
		
	}
	
	public static function getAll( $data = [] ){

		$sql = 'SELECT
					r.register_id,
					u.first,
					u.last,
					r.added_on AS date,
					r.status,
					r.type,
					e.title,
					r.user_id,
					r.paypal_receipt_id,
					r.cost AS donation,
					re.id AS emailed,
					updated.id AS updated,
					r.attended
				FROM registration r
				LEFT JOIN users u on u.user_id = r.user_id
				LEFT JOIN events e on e.event_id = r.event_id
				LEFT JOIN registrations_emails re on re.registration_id = r.register_id AND re.type = "New"
				LEFT JOIN registrations_emails updated on updated.registration_id = r.register_id AND updated.type = "Update"
                GROUP BY r.user_id
				ORDER BY r.added_on, r.modefied_on DESC';
		
		return databaseHandler::getAll( $sql );
	}
	
	public static function addRegistration( $data ){
		$sql = 'INSERT INTO
				registration( phone, user_id, event_id, cost, type )
				VALUES(:phone, :userID, :eventID, :cost, :type )';
		
		
		return databaseHandler::execute( $sql, [
												':phone' => $data[ 'phone' ],
												':userID' => $data[ 'userID' ],
												':eventID' => $data[ 'eventID'],
												':cost' => $data[ 'cost' ],
												':type' => $data[ 'type' ],
											]);
	}
	
	public static function registrationExist( $data ){
		$sql = 'SELECT
					register_id
				FROM registration
				WHERE user_id = :userID AND event_id = :eventID';
		
		$result = databaseHandler::getOne( $sql, [
												':userID' => $data[ 'user_id'],
												':eventID' => $data[ 'event_id' ],
											]);
		
		if( $result[ 'success' ] && $result[ 'result' ] > 0 ){
			return $result[ 'result' ];
		}
		
		return 0;
	}
	
	public static function getLastID(){
		
		$result = databaseHandler::getLastID();
		
		if( $result[ 'success' ] && $result[ 'result' ] > 0 ){
			return $result[ 'result' ];
		}
		
		return 0;
	}
	
	public static function updateRegistrationFromPaypal( $mP ){
			$sql = 'UPDATE
					registration
					SET status = :status, paypal_receipt_id = :prID, modefied_on = NOW()
					WHERE register_id = :registerID';
			
			return databaseHandler::Execute( $sql, [
													':status' => $mP[ 'status' ], 
													':prID' => $mP[ 'prID' ],
													':registerID' => $mP[ 'registerID' ],
											] );
	}
	
	public static function updateStatus( $data = []){

		$sql = 'UPDATE
				registration
				SET status = :status, modefied_on = NOW()
				WHERE register_id = :registerID';
		
		return databaseHandler::Execute( $sql, [ 
												':status' => $data[ 'status' ], 
												':registerID' => $data[ 'registerID' ], 
											]);			
	}

    public static function attended( $data = [] ){
        $sql = 'UPDATE
                registration
                SET attended = :attended
                WHERE register_id = :registerID';

        return databaseHandler::Execute( $sql, [
                                                ':attended' => 1,
                                                ':registerID' => $data[ 'registerID']
                                        ]);
    }

}
?>