<?php
class requestInfoSuccessController{
	public $mP;
	
	public function __construct(){
		if( !isset( $_GET[ 'request_info_id' ])){
			helper::redirect( '/request-info' );
		}
		
		$this->mID = sanitize::sani( $_GET[ 'request_info_id' ], 'INTIGER' );
	}
	
	public function init(){
		$r = new RequestInfo( array( 'id' => $this->mID ));
		
		$result = $r->get();
		
		if( !$result[ 'success' ] ){
			helper::redirect( '/request-info' );
		}
		
		$this->mP = $result[ 'result' ];
	}
}
?>