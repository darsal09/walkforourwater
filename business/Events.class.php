<?php
class Events{
	
	private function __construct(){
		
	}
	
	public static function get(){
		return databaseHandler::getAll( 'CALL wfow_get_events()' );
	}
	
}
?>