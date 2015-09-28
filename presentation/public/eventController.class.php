<?php
class eventController{
	public $mP;
	public $mEventID;
	
	public function __construct(){
		if( !isset( $_GET[ 'wfow_event_id' ])){
			helper::redirect( '/events' );
		}
		
		$this->mEventID = sanitize::sani( $_GET[ 'wfow_event_id' ], 'INTIGER' );
	}
	
	public function init(){
		$results = eventsTable::getByID( $this->mEventID);

		$this->mP = $results[ 'result' ];
		
	}
}
?>