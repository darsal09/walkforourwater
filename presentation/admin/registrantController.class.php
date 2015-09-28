<?php
class registrantController{
	
	public $mRegistrantID;
	public $mRegistrant;
	
	public function __construct(){		
		$this->mRegistrantID = sanitize::sani( $_GET[ 'registrantID' ], 'INTIGER' );
			
		$this->mRegistrant = new Registrant( array( 'id' => $this->mRegistrantID ));
		
		if( !$this->mRegistrant->exist()){
			helper::redirect( '/admin/registrants' );
		}
	}
	
	public function init(){
		$this->mP = $this->mRegistrant->get();		
	}
}
?>