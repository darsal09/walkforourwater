<?php
class Donations{
	protected $mTableName = 'donations';
	
	public function __construct(){
				
	}
		
	public function getTableName(){
		return $this->mTableName;
	}
	public function get(){
		try{
			$sql = 'SELECT *
					FROM '.$this->getTableName();
					
			$result = databaseHandler::getAll( $sql);			
			
			if( count( $result ) < 1 ){
				throw new Exception( 'empty donations' );
			}
			
			return [ 'success' => true, 'error' => false, 'result' => $result ];
		}catch( Exception $e ){
			return [ 'success' => false, 'error' => true, 'result' => [] ];
		}
	}
	
}
?>