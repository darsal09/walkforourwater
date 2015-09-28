<?php
class registrationsController extends controller{
	
	public $mRegistrants;
	
	public function __construct(){
		
	}
	
	public function init(){
		$results = registrationsTable::getAll();
		
		if( !$results[ 'success' ]){
			$this->mRegistrations = [];
		}else{
			$this->mRegistrations = $results[ 'result' ];
		}
	}
}
?>