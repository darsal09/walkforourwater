<?php
class Password
{
	private $_mAllowChars = array( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
									'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
									0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '!', '*', '$', '#', '&', '%', '@', '%', '^' );
	private $_mSize = 8;
	private $_mPassword = array();
	
	public function __construct(){
		$this->set();
	}
	
	private function set(){
		for( $i = 0; $i < $this->_mSize; $i++ ){
			$this->_mPassword[] = $this->_mAllowChars[ $this->getRandom() ];
		}
	}
	
	private function getRandom(){
		return rand( 0, ( sizeof( $this->_mAllowChars ) - 1 ) );
	}	
	
	private function get(){
		return $this->_mPassword;
	}
	
	public function getString(){
		return implode( '', $this->get() );
	}
}
?>