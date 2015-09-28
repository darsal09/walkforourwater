<?php
class donationsController{
	public $mDonations;
	
	public function __construct(){
		
	}
	
	public function init(){
		$results = donationsTable::getAll();
		
		if( !$results[ 'success' ]){
			$this->mDonations = [];
		}else{
			$this->mDonations = $results[ 'result' ];
		}
	}
	
}
?>