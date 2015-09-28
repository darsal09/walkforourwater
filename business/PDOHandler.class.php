<?php

class PDOHandler
{
	public $mSQL;
	public $_mParameters;
	private $_mHandler = null;
	private $_mStatementHandler = null;
	
	public function __construct( $mP = array() ){
		if( !$mP ){
			throw new Exception( 'no parameters were  passed' );
		}
		
		$this->initPDO();
		
		if( !isset( $mP[ 'sql' ] ) ){
			throw new Exception( 'sql was not provided' );
		}
		
		$this->setSQL( $mP[ 'sql' ] );				
			
		if( !isset( $mP[ 'parameter' ] ) ){
			$mP[ 'parameter' ] = [];
		}
		
		$this->setParameters( $mP[ 'parameter' ] );	
	}
	
	private function initPDO(){
		if( !is_null( $this->_mHandler ) ){
			return;			
		}
		
		$this->_mHandler = new PDO( PDO_DSN, DB_USERNAME, DB_PASSWORD, array( PDO::ATTR_PERSISTENT => DB_PERSISTENCY ) );
			
		//set PDO to acccept exceptions
		$this->_mHandler->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	
	public function setParameters( $mP ){
		if( !is_array( $mP )){
			$mP = [];
		}
		
		$this->_mParameters = $mP;
	}
	
	public function setSQL( $sql ){
		if( empty( $sql ) ){
			throw new PDOException( 'You need to provide a sql statement to set the sql' );			
		}
			
		$this->mSQL = $sql;	
	}
		
	public function execute( ){			
		if( $this->hasErrors() ){
			throw new Exception( 'There are errors in your parameters' );			
		}

		$this->_mStatementHandler = $this->_mHandler->prepare( $this->mSQL );
		return $this->_mStatementHandler->execute( $this->_mParameters );
	}
	
	public function getAll(){
		$this->execute();
		
		return $this->_mStatementHandler->fetchAll( PDO::FETCH_ASSOC );
	}
	
	public function getLastID(){
		$new = new PDOHandler( array( 'sql' => 'SELECT LAST_INSERT_ID()', 'parameter' => array() ) );
		
		return $new->getOne();
	}
	
	public function getOne(){
		$this->execute( );
		
		$row = $this->_mStatementHandler->fetch( PDO::FETCH_NUM );
		
		return $row[ 0 ];
	}
	
	public function getRow(){
		$this->execute( );
		
		return $this->_mStatementHandler->fetch( PDO::FETCH_ASSOC );		
	}

	
	public function close(){
		$this->_mHandler = null;
		$this->_mStatementHandler = null;
	}
	
	public function hasErrors(){
		return false;
	}
}
?>