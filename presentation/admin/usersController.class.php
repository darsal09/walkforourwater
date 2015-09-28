<?php
class usersController{
	public $mUsers;
	
	public function __construct(){
		
		
	}
	
	public function init(){
		$results = usersTable::getAll();

		if( !$results[ 'success' ]){
			$this->mUsers = [];
		}else{
			$this->mUsers = $results[ 'result' ];
		}
	}
	
}
?>