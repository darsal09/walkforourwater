<?php

require_once BUSINESS_DIR.'/procedureHandler.class.php';

//class providing generic data access functionality
class databaseHandler
{
	private static $_mHandler;
	
	//private constructor to prevent direct creation of object
	private function __construct(){
	}
	//return an initialized database handler
	private static function getHandler( ){
		//create a database connection only if one doesn't already exist
		if( !isset( self::$_mHandler ) ){
			//execute code catching potential exceptions
			try{
				//create a new PDO class instance
				self::$_mHandler = new PDO( PDO_DSN, DB_USERNAME, DB_PASSWORD, array( PDO::ATTR_PERSISTENT => DB_PERSISTENCY ) );
				
				//configure PDO to throw exceptions
				self::$_mHandler->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			}
			catch( PDOException $e ){
				self::Close();
				throw new Exception( $e->getMessage());
			}
		}
		//return the database handler
		return self::$_mHandler;
	}
	
	//clear the PDO class instance
	public static function Close(){
		self::$_mHandler = null;
	}
	
	//Wrapper method for PDOStatement::execute()
	public static function Execute( $sqlQuery, $params = null ){
		try{
			$mP = array( 'sql' => $sqlQuery );
			
			if( $params != null )
				$mP[ 'parameter' ] = $params;
			
			$pdo = new PDOHandler( $mP );
			
			return [ 'success' => true, 'result' => $pdo->execute() ];		
		}catch( Exception $e ){
			return [ 'success' => false, 'error' => true, 'message' => $e->getMessage() ];
		}
	}
	//wrapper method for PDOStatement::fetchAll()
	public static function getAll( $sqlQuery, $params = null, $fetchStyle = PDO::FETCH_ASSOC ){
		try{
			$mP = array( 'sql' => $sqlQuery );
			
			if( $params != null )
				$mP[ 'parameter' ] = $params;
				
			$pdo = new PDOHandler( $mP );
			
			return [ 'success' => true, 'result' => $pdo->getAll() ];
		}catch( Exception $e ){
			return [ 'success' => false, 'error' => true, 'message' => $e->getMessage() ];
		}
	}
	
	//wrapper method for PDOStatement::fetch()
	public static function getRow( $sqlQuery, $params = null, $fetchStyle = PDO::FETCH_ASSOC ){
		try{
			$mP = array( 'sql' => $sqlQuery );
		
			if( $params != null ){
				$mP[ 'parameter' ] = $params;				
			}
				
			$pdo = new PDOHandler( $mP );
			
			return [ 'success' => true, 'result' => $pdo->getRow() ];
		}catch( Exception $e ){
			return [ 'success' => false, 'error' => true, 'message' => $e->getMessage() ];
		}
	}
	
	//return the first column value from a row
	public static function getOne( $sqlQuery, $params = null ){		
		try{
			$mP = array( 'sql' => $sqlQuery );
			
			if( $params != null ){
				$mP[ 'parameter' ] = $params;				
			}
				
			$pdo = new PDOHandler( $mP );
			
			return [ 'success' => true, 'result' => $pdo->getOne() ];		
		}catch( Exception $e ){
			return [ 'success' => false, 'error' => true, 'message' => $e->getMessage() ];
		}
	}
	
	public static function getLastID(){
		return self::getOne( 'SELECT LAST_INSERT_ID()' );
	}
}
?>