<?php
class supportersTable{
	
	private function __construct(){
		
	}
	
	public static function getAll(){
		return databaseHandler::getAll( 'CALL wfow_get_supporters()' );
	}
	
}
?>