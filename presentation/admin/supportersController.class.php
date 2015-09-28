<?php
class supportersController{
	public $mSupporters;
	
	public function __construct(){
		
	}
	
	public function init(){
		$results = supportersTable::getAll();
		
		if( !$results[ 'success' ]){
			$this->mSupporters = [];
		}else{
			$this->mSupporters = $results[ 'result' ];
		}
	}
}
?>