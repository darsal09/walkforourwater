<?php
class eventsTable{
	private function __construct(){
		
	}
	
	public static function getAll(){
		return databaseHandler::getAll( 'CALL wfow_get_events()' );
	}
	
	public static function getByID( $eventID ){
		$event =  databaseHandler::getRow( 'CALL wfow_get_event( :eventID )', [ ':eventID' => $eventID ] );
		
		if( count( $event[ 'result' ] ) == 0 ){
			return $event;
		}
		
		$locationResult = self::getLocation( $event['result'][ 'location_id' ] );
		
		if( count( $locationResult[ 'result']) > 0 ){
			$event[ 'result' ][ 'location' ] =  $locationResult[ 'result' ];
		}
		
		
		return $event;
	}
	
	public static function getLocation( $eventID ){
		return databaseHandler::getRow( 'CALL wfow_get_event_location(:locationID)', [ ':locationID' => $eventID ]);
	}
	
}
?>