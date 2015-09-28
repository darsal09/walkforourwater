<?php
class controller{
	public $mP = array();
	public $mErrors = array();
	protected $mRequired = array();
	public $mHasErrors = false;
	
	public function __construct(){
		
	}
	
	public function hasErrors(){
		foreach( $this->mP AS $key => $value){
			if( $this->mRequired[ $key ] && empty( $value )){
				$this->mErrors[ $key ] = true;
			}
		}
		
		return $this->mHasErrors = in_array( true, $this->mErrors );
	}
}
?>