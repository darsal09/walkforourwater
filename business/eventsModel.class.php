<?php
class eventsModel{
	
	private function __construct(){
		
	}
	
	public static function get( $options = [] ){
		$options += [
			':limit' => 10,
			':offset' => 0,
		];
		
		return databaseHandler::getAll( 'CALL wfow_get_upcoming_events( :limit, :offset )', $options );
	}
	
	public static function getPrevious( $options = [] ){
		$options += [
			':limit' => 10,
			':offset' => 0,
		];
		
		return databaseHandler::getAll( 'CALL wfow_get_previous_events( :limt, :offset )', $options );
	}
	
}
?>