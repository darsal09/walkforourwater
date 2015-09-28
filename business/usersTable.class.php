<?php
class usersTable{
	
	private function __construct(){
		
	}
	
	public static function getAll(){
		$sql = 'SELECT 
				user_id,
				first,
				last,
				email,
				type,
				status,
				added_on,
				last_login
				FROM users
				ORDER BY first, last, email';
		return databaseHandler::getAll( $sql );
	}
	
	public static function getByEmail( $email ){
		if( strlen( $email ) < 0 ){
			return [ 'succes' => false, 'error' => true, 'message' => 'You need a valid email' ];
		}
			
		return databaseHandler::getRow( 'CALL wfow_get_user_by_email', [ ':email' => $email ]);
	}
	
	public static function addUser( $data = []){
		$sql = 'INSERT INTO
				users( first, last, email, password, status, type)
				VALUES( :first, :last, :email, :password, :status, :type )';
		
		
		return databaseHandler::Execute( $sql, [
			':first' 	=> $data[ 'first'],
			':last' 	=> $data[ 'last' ],
			':email' 	=> $data[ 'email' ],
			':password' => $data[ 'password' ],
			':status' 	=> $data[ 'status' ],
			':type' 	=> $data[ 'type' ],
		] );
	}
	
	public static function userExist( $email ){
		$sql = 'SELECT
					user_id
				FROM users
				WHERE email = :email';
				
		$result = databaseHandler::getOne( $sql, [ ':email' => $email]);
		
		if( $result[ 'success' ] && $result[ 'result' ] > 0){
			return $result[ 'result' ];
		}
		
		return 0;
	}
	
	public static function updateUser( $data = [] ){
		$sql = 'UPDATE users
				SET first = :first, last = :last, email = :email, status = :status
				WHERE user_id = :id';

		return databaseHandler::Execute( $sql, [ ':id' 		=> $data[ 'id' ],
													':first' 	=> $data[ 'first' ],
													':last' 	=> $data[ 'last' ],
													':email' 	=> $data[ 'email' ],
													':status' 	=> $data[ 'status' ],
											] );
											
											
	}
	
	public static function getLastID(){
		
		$result = databaseHandler::getLastID();
		
		if( $result[ 'success' ] && $result[ 'result' ] > 0 ){
			return $result[ 'result' ];
		}
		
		return 0;
	}
}
?>