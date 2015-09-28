<?php
class eventsController{
	public $mEvents;
	
	public function __construct(){
		
	}
	
	public function init(){
		$results = events::get();
		
		if( !$results[ 'success' ]){
			$this->mEvents = [];
		}else{
			$this->mEvents = $results[ 'result' ];
		}
	}
}
?>