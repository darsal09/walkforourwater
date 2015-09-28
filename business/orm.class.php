<?php
/*
	This class holds the exist, delete, add, update, and save functions that help to add information to the database 
*/
class orm
{
	protected $mTableName;
	protected $mErrors = array();
	protected $mIDParameter = array( 'id' => 'id' );
	protected $mID;
	protected $mHasErrors = false;
	protected $mWhereStatements = '';
	protected $mUpdateStatements = '';
	protected $mParameters = '';
	protected $mColums = '';
	protected $mArray;
	
	public function __construct( $id = 0 ){
		if( $id > 0 ){
			$this->setID( $id );
		}
	}
	
	public function setID( $id )
	{
		$this->mID = $id;
	}
	
	public function setColumns( $columns )
	{
		$this->mColumns = $columns;
	}
	
	public function setParameters( $params )
	{
		$this->mParameters = $params;
	}
	
	public function setTableName( $name )
	{
		$this->mTableName = $name;
	}
	
	public function setWhereStatement( $where )
	{
		$this->mWhereStatements = $where;	
	}
	
	public function setUpdateStatement( $update )
	{
		$this->mUpdateStatements = $update;	
	}
	
	public function delete()
	{	
		try{
			$mID = $this->getID();
			
			if( $mID < 1 )
				 throw new Exception( 'The element is not valid' );
				
			$sql = 'DELETE FROM '.$this->getTableName().'
					WHERE '.$this->getIDParameter().' = :id';
			
			$result = databaseHandler::Execute( $sql, array( ':id' => $mID ) );
			
			if( $result < 1 )
				 throw new Exception('Could not delete element '.$mID.' from '.$this->getTableName() );
				
			$this->setID( 0 );
			
			return array( 'success' => true, 'message' => 'Element '.$mID.' was deleted from '.$this->getTableName() );
		}catch( Exception $e ){
			return array( 'success' => false, 'message' => $e->getMessage() );
		}
	}
	
	protected function exist(){	
		try{
			$this->setStatements();
			
			if( $this->hasErrors()){
				throw new Exception( 'There are errors in your input information');
			}
			
			$sql = 'SELECT '.$this->getIDParameter().'
					FROM '.$this->getTableName().'
					WHERE '.$this->getWhereStatements();

			$result = databaseHandler::getOne( $sql, $this->getArray() );
			
			print_r( $result );
			
			if( $result < 1 ){
				throw new Exception( 'The registrant does not exist in the stystem' );
			}
				
			$this->setID( $result );
			
			return array( 'success' => true, 'message' => 'registrant exist in the system' );
		}catch( Exception $e){
			return array( 'success' => false, 'message' => $e->getMessage() );
		}
	}
	public function add(){		
		try{
			if( $this->hasErrors() ){
				print_r( $this->mErrors);
				throw new Exception( 'your parameters have errors' );
			}
			
			$results = $this->exist();
			if( $results[ 'success' ] ){
				throw new Exception ( $results[ 'message' ]);
			}
			
			$sql = 'INSERT
					INTO '.$this->getTableName().' ( '.$this->getColumns().' )
					VALUES( '.$this->getParameters().' )';
					
			$result = databaseHandler::Execute( $sql, $this->getArray() );
			
			print_r( $result );
			
			if( $result < 1 )
				throw new Exception( 'element was not created in '.$this->getTableName() );
				
			$this->setID( databaseHandler::getLastID() );
			
			return array( 'success' => true, 'message' => 'element was created in '.$this->getTableName().' with id: '.$this->getID() );
			
		}catch( Exception $e ){
			return array( 'success' => false, 'message' => $e->getMessage() );
		}
		
	}
	
	public function save()
	{
		if( $this->getID() > 0 ){
			return $this->update();			
		}
			
		return $this->add();
	}
	
	public function update()
	{	
		try{
			
			if( $this->getID() < 1 )
				throw new Exception( 'the element you provided is not valid' );
				
			$sql = 'UPDATE '.$this->getTableName().'
					SET '.$this->getUpdateStatements().'
					WHERE '.$this->getIDParameter().' = :id';
	
			$array = array_merge( array( ':id' => $this->getID() ), $this->getArray() );
			$result = databaseHandler::Execute( $sql, $array );
			
			if( $result < 1 ){
				throw new Exception( 'element '.$this->getID().' was not updated in '.$this->getTableName() );
			}
		
			return array( 'success' => true, 'message' => 'element '.$this->getID().' was updated in '.$this->getTableName() );
		}catch( Exception $e ){
			return array( 'success' => false, 'message' => $e->getMessage() );
		}
	}
	/*
		This function collects all the columns and parameters together to be use in the WHERE of a sql statement
		returns as a string
	*/
	public function setStatements()
	{
		$where = '';
		$update = '';
		$parameters = '';
		$columns = '';
		
		$i = 0; 
		
		$size = sizeof( $this->mFields );
		
		foreach( $this->mFields AS $field => $value )
		{
			$where 		.= $value.' = :'.$field;
			$update 	.= $value.' = :'.$field;
			$parameters .= ':'.$field;
			$columns 	.= $value;
			
			if( $i < ( $size - 1 ) )
			{
				$where 		.= ' AND ';
				$update 	.= ', ';
				$parameters .= ', ';
				$columns 	.= ', ';
			}
			
			$i++;
		}	
		
		
		$this->setWhereStatement( $where );
		$this->setUpdateStatement( $update );
		$this->setParameters( $parameters );
		$this->setColumns( $columns );
	}
	
	public function getID()
	{
		return $this->mID;
	}
	
	public function getColumns( )
	{
		return $this->mColumns;
	}
	
	public function getUpdateStatements()
	{
		return $this->mUpdateStatements;
	}
	
	public function getWhereStatements()
	{
		return $this->mWhereStatements;
	}
	
	public function getParameters()
	{
		return $this->mParameters;
	}
	
	public function getArray()
	{			
		$array = array();
		
		foreach( $this->mFields AS $field => $value )
		{
			$function = 'get'.ucfirst( $field );
			$array[ ':'.$field ] = $this->$function();
		}
		
		return $this->mArray = $array;
	}
	
	public function checkErrors()
	{
		foreach( $this->mReq AS $field => $required ){
			$function = 'm'.ucfirst( $field );
			
			if( $required && ( ( is_numeric( $this->$function ) && $this->$function < 0 ) || $this->$function == ''  ) ){
				$this->mErrors[ $field ] = true;
			}
		}
		
		if( empty( $this->mTableName ) ){			
			$this->mErrors[ 'tableName' ] = true;
		}
		
		$this->mHasErrors = in_array( true, $this->mErrors );
	}
	
	public function hasErrors()
	{
		return $this->mHasErrors;
	}
	
	public function getErrors()
	{
		return $this->mErrors;
	}
		
	public function getTableName()
	{
		return $this->mTableName;
	}
	
	public function getIDParameter()
	{
		return $this->mIDParameter[ 'id' ];
	}
	
	public function get(){
		try{
			if( $this->getID() < 1 ){
				throw new Exception( 'The id '.$this->getID().' does not exist' );
			}
			
			$sql = 'select * 
					from '.$this->getTableName().'
					where '.$this->getIDParameter().' = :id';
					
			$results = databaseHandler::getRow( $sql, array( ':id' => $this->getID() ));		
			
			if( is_array( $results) && !empty( $results )){
				return array( 'success' => true, 'result' => $results );
			}else{
				throw new Exception( 'there was not request information with this id: '.$this->getID() );
			}			
		}catch( Exception $e ){
			return array( 'sucess' => false, 'message' => $e->getMessage(), 'result' => array() );
		}
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