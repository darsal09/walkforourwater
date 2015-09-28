<?php
class registrationsEmailsTable{
	
	private function __construct(){
		
	}	
	
	public static function incompleteSent( $data ){
		return databaseHandler::Execute( 'CALL wfow_add_registrations_emails( :userID, :registrationID, :eventID, :type )', [
			':userID' => $data[ 'user_id' ],
			':registrationID' => $data[ 'register_id' ],
			':eventID' => $data[ 'event_id' ],
			':type' => 'Unfinish',
		]);
	}
	
	public static function newSent( $data ){
		return databaseHandler::Execute( 'CALL wfow_add_registrations_emails( :userID, :registrationID, :eventID, :type )', [
			':userID' => $data[ 'user_id' ],
			':registrationID' => $data[ 'register_id' ],
			':eventID' => $data[ 'event_id' ],
			':type' => 'New',
		]);
	}
	
	public static function updateSent( $data ){
		
		return databaseHandler::Execute( 'CALL wfow_add_registrations_emails( :userID, :registrationID, :eventID, :type )', [
			':userID' => $data[ 'user_id' ],
			':registrationID' => $data[ 'register_id' ],
			':eventID' => $data[ 'event_id' ],
			':type' => 'Update',
		]);
	}

	
	
}
?>