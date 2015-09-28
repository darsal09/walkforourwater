<?php
class passwordHash extends password
{
	protected $_mString;
	
	
	public function __construct( $mP = [] ){		
		parent::__construct( $mP );
		
		if( isset( $mP[ 'string' ] ) ){
			$this->setString( $mP[ 'string' ] );			
		}
	}
	
	public function setString( $string ){
		$this->_mString = helper::sanitize( $string, 'STRING' );
	}
	
	public function getPassword(){
		if( $this->hasErrors() ){
			echo 'there are errors';
			return false;
		}	
		
		return $this->hash();
	}	
	
	private function hash(){
		return $this->_mPassword = password_hash( $this->_mString, PASSWORD_BCRYPT, array( 'cost' => $this->_mCost, 'salt' => $this->_mSalt ) );
	}	
}
?>