<?php
class contactUsTable{
	
	private function __construct(){
		
	}
	
	public static function addMessage( $data ){
		$sql = 'INSERT INTO 
				contact_us( name, phone, email, subject, message )
				VALUES( :name, :phone, :email, :subject, :message )';
		
		return databaseHandler::Execute( $sql, [
												':name' => $data[ 'name' ],
												':phone' => $data[ 'phone' ],
												':email' => $data[ 'email' ],
												':subject' => $data[ 'subject' ],
												':message' => $data[ 'message' ],
										]);
	}	
	
	public static function getMessages(){
		return databaseHandler::getAll( 'CALL wfw_get_messages()');
	}
}
?>