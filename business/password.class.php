<?php
class password{
	private $_mAllowChars = array( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
									'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
									0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '!', '*', '$', '#', '&', '%', '@', '%', '^' );
									
	private $_mSize = 8;
	protected $_mPassword;
	protected $_mSalt;
	protected $_mCost = 10;
	
	public function __construct( $mP = array() ){
		if( isset( $mP[ 'password' ] ) ){
			$this->setPassword( $mP[ 'password' ] );			
		}else{
			$this->setRandomPassword();
		}

		if( isset( $mP[ 'cost' ] ) ){
			$this->setCost( $mP[ 'cost' ] );			
		}

		$this->setSalt( );			
	}
	
	public function setCost( $cost ){
		$this->_mCost = helper::sanitize( $cost, 'INTIGER' );
	}
	
	public function setPassword( $password ){
		$this->_mPassword = $password;	
	}
		
	public function setSalt( $salt = null ){
		$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
		$salt = strtr(base64_encode(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)), '+', '.');
		
		$this->_mSalt = sprintf("$2a$%02d$", $this->getCost() ) . $salt;
	}
		
	public function getSalt(){
		return $this->_mSalt;
	}
	
	public function getCost(){
		return $this->_mCost;
	}
	
	protected function hasErrors(){
		if( ( !$this->_mSalt || empty( $this->_mSalt ) ) || $this->_mCost < 4  )
			return true;
			
		return false;
	}
	
	private function setRandomPassword(){
		$password = [];
		
		for( $i = 0; $i < $this->_mSize; $i++ ){
			$password[] = $this->_mAllowChars[ $this->getRandomCharacter() ];
		}
		$this->_mPassword = implode( '', $password );
	}
	
	private function getRandomCharacter(){
		return rand( 0, ( sizeof( $this->_mAllowChars ) - 1 ) );
	}	
	
	public function getPassword(){
		return $this->_mPassword;
	}
}
?>