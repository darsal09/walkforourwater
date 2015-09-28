<?php
class requestInfoController extends controller{
	
	public $mP = array( 'name' => '',
						'email' => '',
						'phone'  => '',
						'subject' => '',
						'message' => '',
						);
						
	public function __construct(){
	
		if( isset( $_POST[ 'add_registration' ])){
			$this->add();
		}	
	}
	
	public function add(){
		$this->mP = sanitize::filterInputs('POST', array( 
															'name' => FILTER_SANITIZE_STRING,
															'email' => FILTER_VALIDATE_EMAIL,
															'phone' => FILTER_SANITIZE_STRING,
															'subject' => FILTER_SANITIZE_STRING,
															'message' => FILTER_SANITIZE_STRING,
														));
		$rinfo = new RequestInfo( $this->mP );
		
		$result = $rinfo->add();
		if( $result[ 'success' ]){
			$id = $rinfo->getID();
			helper::redirect( '/request-info/'.$id.'/success' );
		}
	}
	
	
}
?>