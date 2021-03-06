<?php
class registrations{
	
	private function __construct(){
		
	}
	
	public static function getNew(){
		$sql = "SELECT 
					u.user_id,
					u.first,
					u.email,
					r.register_id,
					r.event_id
				FROM registration r
				LEFT JOIN users u ON u.user_id = r.user_id
				LEFT JOIN registrations_emails re on re.registration_id = r.register_id
				WHERE r.status = 'Completed' AND re.id is null AND u.email LIKE '%@%'
				ORDER BY RAND()
				LIMIT 3";
				
		return databaseHandler::getAll( $sql );
	}
	
	public static function getIncomplete(){
		return databaseHandler::getRow( 'CALL wfow_get_incomplete_registrations()' );
	}

	public static function getAll(){
		return registrationsTable::getAll();
	}

    public static function get( $rID ){
        $sql = "SELECT
					u.user_id,
					u.first,
					u.email,
					r.register_id,
					r.event_id
				FROM registration r
				LEFT JOIN users u ON u.user_id = r.user_id
				LEFT JOIN registrations_emails re on re.registration_id = r.register_id
				WHERE r.register_id = :rID";

        return databaseHandler::getRow( $sql, [ ':rID' => $rID ]);
    }

    public static function getUpdateEmails(){
        $sql = "SELECT
					u.user_id,
					u.first,
					u.email,
					r.register_id,
					r.event_id
				FROM registration r
				LEFT JOIN users u ON u.user_id = r.user_id
				WHERE  r.register_id IN(  SELECT registration_id FROM registrations_emails WHERE type = 'New' )
				AND r.register_id NOT IN( SELECT registration_id FROM registrations_emails WHERE type = 'Update')
				AND u.email LIKE '%@%'
				ORDER BY RAND()
				LIMIT 3";

        return databaseHandler::getAll( $sql );
    }

}
?>